<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\perfumerequest;
use App\Traits\GeneralTrait;
use Session;

class PerfumeRequestController extends Controller
{

    public function index(){
      $obj =  perfumerequest::where('merchant_id', auth()->guard('api')->user()->id)->latest()->get();
              return response()->json(['status' => 1, 'data' => $obj]);

    }

    public function countpost(){
        
        return  perfumerequest::where('merchant_id', auth()->guard('api')->user()->id)
                               ->andwhere('status', '=' , 1)->count();
  
      }

    public function AddPerfumeRequest(Request $request)
    {
        $rule = [
            'req_name' => 'required',
            'image' => 'required',
            'sale_price' => 'required',
            'ghali_price' => 'required',
            'profit' => 'required',
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
        $perfumerequest = perfumerequest::create([

            'req_name' => $request['req_name'],
            'image' => $request['image'],
            'type' => $request['type'],
            'category' => $request['category'],
            'sale_price' => $request['sale_price'],
            'stock' => $request['stock'],
            'count_in_stock' => $request['count_in_stock'],
            'count_in_rate' => $request['count_in_rate'],
            'date' => $request['date'],
            'tag' => $request['tag'],
            'description' => $request['description'],
            'value_offer' => $request['value_offer'],
            'end_date' => $request['end_date'],
            'start_date' => $request['start_date'],
            'offers' => $request['offers'],
            'ghali_price' => $request['ghali_price'],
            'profit' => $request['profit'],
            'status'   => 0 ,
            'merchant_id'  => auth()->guard('api')->user()->id
        ]);

        
        if ($request->hasFile('image')) {
            $picture_name = time() . str_shuffle('abcdef') . '.' . $request->file('image')->getClientOriginalExtension();
            Image::make($request->file('image'))->save(public_path("$picture_name"));
            $request->request->set('image', $picture_name);
            $perfumerequest->image = $picture_name;
            $perfumerequest->save();
        }

        return response()->json(['status' => 1, 'data' => $perfumerequest]);
    }

    public function activaterequest($id)
    {
        // foreach ($client as $clientId)
        $perfumerequest =perfumerequest::findOrNew($id);
        if($perfumerequest->status == 0 ){
            $perfumerequest->update(['status' => "1"]);
        }
        else{
            $perfumerequest->update(['status' => "0"]);
        }
    }
}
