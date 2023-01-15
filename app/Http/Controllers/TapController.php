<?php

namespace App\Http\Controllers;
use App\Models\Tap;
use App\Models\TapData;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class TapController extends Controller
{
    public function createPayment()
    {
        return view('payment');
    }

    public function payment(Request $request)
    {
        // $request = $this->validate($request,[
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'email' => 'required|email',
        //     'currency' => 'required',
        //     'amount' => 'required|numeric',
        //     'order_id' => 'required',
        //     'phone' => 'required|numeric'
        // ]);

        $input = $request->all();
        $user= new TapData;
         $user->number = $request->number;
         $user->name = $request->name;
         $user->cvc = $request->cvc;
         $user->exp_month = $request->exp_month;
         $user->exp_year = $request->exp_year;
         $user->save();

        $data['amount'] = '500';
        $data['currency'] = 'SAR';
        $data['customer']['first_name'] = $input['name'];
        // $data['customer']['email'] = $input['email'];
        $data['customer']['phone']['country_code'] = '+91';
        $data['customer']['phone']['number'] = '9876543210';
        $data['source']['id'] = 'src_card';
        $data['redirect']['url'] = 'http://127.0.0.1:8000/en/callback';

        // $payment = [
        //     "amount" => round($request['amount'],2),
        //     "description" =>  'Hello '. $request['first_name'].' '.$request['last_name'].' Your order_id is '.$request['order_id'].' please pay and confirm your order Thanks For made order.',
        //     "currency" => $request['currency'],
        //     "receipt" => [
        //         "email" => true,
        //         "sms" => true
        //     ],
        //     "customer"=> [
        //         "first_name"=> $request['first_name'],
        //         "last_name"=> $request['last_name'],
        //         "email"=> $request['email'],
        //         "phone"=> [
        //             "country_code" => 'IN',
        //             "number" => $request['phone']
        //         ]
        //     ],
        //     "source"=> [
        //         "id"=> "src_card"
        //     ],
        //     "redirect"=> [
        //         "url"=> route('tap.callback')
        //     ]
        // ];

        $response = Curl::to('https://api.tap.company/v2/charges')
        ->withBearer('sk_test_Mv4g5FCPcqk8V7t2pxny69Kr')
        ->withData($data)
        ->asJson()
        ->post();

        
        return redirect()->to($response->transaction->url);
        
        // $curl = curl_init();
        // curl_setopt_array($curl, array(
        // CURLOPT_URL => "https://api.tap.company/v2/charges",
        // CURLOPT_RETURNTRANSFER => true,
        // CURLOPT_ENCODING => "",
        // CURLOPT_MAXREDIRS => 10,
        // CURLOPT_TIMEOUT => 30,
        // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        // CURLOPT_CUSTOMREQUEST => "POST",
        // CURLOPT_POSTFIELDS => json_encode($payment),
        // CURLOPT_HTTPHEADER => array(
        //     "authorization: Bearer sk_test_XKokBfNWv6FIYuTMg5sLPjhJ", // SECRET API KEY
        //     "content-type: application/json"
        // ),
        // ));

        // $response = curl_exec($curl);
        // $err = curl_error($curl);

        // curl_close($curl);

        // $response = json_decode($response);

        // return redirect($response->transaction->url);
    }

    public function callback()
    {
        $response = Curl::to('https://api.tap.company/v2/charges/'.$_GET['tap_id'])
        ->withBearer('sk_test_Mv4g5FCPcqk8V7t2pxny69Kr')
        ->asJson()
        ->get();
        $data= new Tap;
         $data->name = $response->customer->first_name;
         $data->tran_id = $response->id;
        //  $data->email = $response->customer->email;
         $data->amount = $response->amount;
         $data->save();
        if ($response->status === 'CAPTURED') {
            
            $data['name']  = $response->customer->first_name;
            // $data['email']  = $response->customer->email;
            $data['tran_id']  = $response->id;
            $data['amount']  = $response->amount;
            Tap::create($data);
        }
        return redirect()->route('payment.create')->with('message', 'Payment Added Successfully');
    }
    
    public function getlist()
    {
        $data = Tap::get();

        return view('table',compact('data'));
    }

    public function refund($id)
    {
        $response = Tap::where('tran_id',$id)->first();
        $data['charge_id'] = $id;
        $data['amount'] = $response->amount;
        $data['currency'] = 'USD';
        $data['reason'] = 'requested_by_customer';
        $data['post']['url'] = 'http://127.0.0.1:8000/en/payment';

        $response = Curl::to('https://api.tap.company/v2/refunds')
        ->withBearer('sk_test_Mv4g5FCPcqk8V7t2pxny69Kr')
        ->withData($data)
        ->asJson()
        ->post();

        dd($response);
    }
}
