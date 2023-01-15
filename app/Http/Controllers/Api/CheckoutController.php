<?php

namespace App\Http\Controllers\Api;
use App\Models\checkout;
use VMdevelopment\TapPayment\Facade\TapPayment;
use App\Models\Brand;
use App\Models\order_detail;
use App\Models\order;
use App\Models\package;
use App\Models\Note;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon ;


class CheckoutController extends Controller
{
    public function ListOfCheckouts()
    {
        $checkouts=checkout::get();

        return response()->json(['status' => 1, 'data' => $checkouts]);
    }

    public function show($id)
    {
        return checkout::find($id);
    }

    public function store(Request $request)
    {
        $rule = [
            'city' => 'required|string',
        ];

        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);
        if ($validator->fails()) {
            if (str_contains(validationErrorsToString($validator->errors()), 'perfume_id')) {
                return response()->json(['status' => 423, 'message' => validationErrorsToString($validator->errors())], 422);
            }
            return response()->json(['status' => 422, 'message' => validationErrorsToString($validator->errors())], 422);
        }

        $total = 0;
        $order = order::create([
        'status'   =>  'pending',
        'date'    => Carbon::now(),
        'merchant_id'  => auth()->guard('api')->user()->id,
        'total'   => 0
        ]);

        if(isset($request->products) && $request->products != null ){
                foreach($request->products as $product){ 
                    order_detail::create([
                        'product'   => $product[0] ,
                        'price'   => $product[1] ,
                        'subtotal'  =>  $product[2] *  $product[1] ,
                        'amount'    => $product[2],
                        'order_id'    => $order->id,
                        'orderable_id'    => $product[0],
                        'orderable_type' => 'App\Models\Perfume'
                    ]);
                $total  +=  $product[2] *  $product[1] ;
                }
        

        }
        elseif (isset($request->packages) && $request->packages != null ){
            foreach($request->packages as $package){
                order_detail::create([
                    ' product'   => $package[0] ,
                    'price'   => $package[1] ,
                    'subtotal'  =>  $package[2] *  $package[1] ,
                    'amount'    => $package[2],
                    'order_id'    => $order->id,
                    'orderable_id'    => $package[0],
                    'orderable_type' => 'App\Models\Package'
                ]);
                $total  +=  $package[2] *  $package[1] ;
            }

        }

        elseif ( isset($request->notes) && $request->notes != null ){
          foreach($request->notes as $note){
            order_detail::create([
                'product'   => $note[0] ,
                'price'   => $note[1] ,
                'subtotal'  =>  $note[2] *  $note[1] ,
                'amount'    => $note[2],
                'order_id'    => $order->id,
                'orderable_id'    => $note[0],
                'orderable_type' => 'App\Models\Note'
            ]);
                $total  +=  $note[2] *  $note[1] ;
            }
            

        }

            $order->update([
                'client_email' => $request['client_email'],
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],
                'company_name' => $request['company_name'],
                'image' => $request['image'],   
                'shipping' => $request['shipping'],
                'zip' => $request['zip'],
                'phone' => $request['phone'],
                'notes' => $request['notes'],
                'payment' => $request['payment'],
                'price' => $request['price'],
                'quantity' => $request['quantity'],
                'block' => $request['block'],
                'city' => $request['city'],
                'total'  => $total
            ]);
            $order->save();

            $secret_api_Key = 'sk_test_M19b6hykd83xCSaqF0HI7i4t';
             return response()->json(['status' => 1, 'message' => 'load success','data'=>$order]);

            


        // $payment = [
        //     "amount" => round($request->total,2),
        //     "description" =>  'Hello '. $request->first_name.' '.$request->last_name.' Your order_id is '.$order->id.' please pay and confirm your order Thanks For made order.',
        //     "currency" => "SA",
        //     "receipt" => [
        //         "email" => true,
        //         "sms" => true
        //     ],
        //     "customer"=> [
        //         "first_name"=> $request->first_name,
        //         "last_name"=> $request->last_name,
        //         "email"=> $request->email,
        //         "phone"=> [
        //             "country_code" => 'IN',
        //             "number" => $request->phone
        //         ]
        //     ],
        //     "source"=> [
        //         "id"=> "src_card"
        //     ],
        //     "redirect"=> [
        //         "url"=> route('tap.callback')
        //     ]
        // ];
        
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
        //     "authorization: sk_test_M19b6hykd83xCSaqF0HI7i4t", // SECRET API KEY
        //     "content-type: application/json"
        // ),
        // ));

        // $response = curl_exec($curl);
        // $err = curl_error($curl);

        // curl_close($curl);

        // $response = json_decode($response);
        
        // return redirect($response->transaction->url);
      

    }

    public function callback(Request $request)
    {
        $input = $request->all();

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.tap.company/v2/charges/".$input['tap_id'],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "{}",
        CURLOPT_HTTPHEADER => array(
                "authorization: sk_test_M19b6hykd83xCSaqF0HI7i4t" // SECRET API KEY
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $responseTap = json_decode($response);

        if ($responseTap->status == 'CAPTURED') {
            
            return redirect()->route('tap.form')->with('success','Payment Successfully Made.');
        }

        return redirect()->route('tap.form')->with('error','Something Went Wrong.');
    }

}
