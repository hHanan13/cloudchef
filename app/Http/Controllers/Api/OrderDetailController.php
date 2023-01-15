<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\order_detail;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{

    public function index()
    {
        $order_detail = order_detail::get();
        return response()->json($order_detail);
    }

    public function show($id)
    {
        return order_detail::find($id);
    }

    public function store(Request $request)
    {
        // return cart::create($request->all());
        $rule = [
            'product' => 'required|string',
            'total' => 'required',
            'batch_id' => 'required',
            'shipping' => 'required',
            'amount' => 'required',
            'batch' => 'required',
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
        $order_detail = order_detail::create([

            'product' => $request['product'],
            'total' => $request['total'],
            'subtotal' => $request['subtotal'],
            'payment_method' => $request['payment_method'],
            'shipping' => $request['shipping'],
            'paid' => $request['paid'],
            'batch_id' => $request['batch_id'],
            'amount' => $request['amount'],
            'batch' => $request['batch'],
            'cash' => $request['cash'],
            'billing_access_address' => $request['billing_access_address'],
            'shipping_address' => $request['shipping_address'],
            'checkout_status' => $request['checkout_status'],
           
        ]);
       
        return response()->json(['status' => 1, 'message' => __('lang.added_successfully'),'data' => $order_detail]);

    }

    public function update(Request $request, $id) {
        $order_detail = order_detail::findOrFail($id);
        $order_detail->update($request->all());
    
        return response()->json(['status' => 1, 'message' => __('lang.updated_successfully'),'data' => $order_detail]);

    }

}
