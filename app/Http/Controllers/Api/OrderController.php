<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order = order::where('merchant_id',auth()->guard('api')->user()->id)->latest()->get();
        return response()->json($order);
    }
    public function show($id)
    {
        
         $order = order::with('details')->find($id);
         return response()->json($order);
         
    }

    public function store(Request $request)
    {
        // return cart::create($request->all());
        $rule = [
            'total' => 'required',
            'status' => 'required',
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
        $order = order::create([

            'total' => $request['total'],
            'status' => $request['status'],
            'date' => $request['date'],
           
        ]);
       
        return response()->json(['status' => 1, 'message' => __('lang.added_successfully'),'data' => $order]);

    }

    public function update(Request $request, $id) {
        $order = order::findOrFail($id);
        $order->update($request->all());
    
        return response()->json(['status' => 1, 'message' => __('lang.updated_successfully'),'data' => $order]);

    }
}
