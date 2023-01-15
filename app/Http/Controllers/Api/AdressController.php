<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\address;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class AdressController extends Controller
{
    public function index()
    {
        $address = address::where('merchant_id',auth()->guard('api')->user()->id)->latest()->get();
        return response()->json($address);
    }

    public function show($id)
    {
        return address::find($id);
    }

    public function store(Request $request)
    {
        $rule = [
            'street' => 'required|string',
            'city' => 'required',
            'region' => 'required',
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
        $address = address::create([

            'block' => $request['block'],
            'street' => $request['street'],
            'apartment' => $request['apartment'],
            'city' => $request['city'],
            'region' => $request['region'],
            'governorate' => $request['governorate'],
            'merchant_id'  => auth()->guard('api')->user()->id
           
        ]);
       
        return response()->json(['status' => 1, 'message' => __('lang.added_successfully'),'data' => $address]);

    }

    public function update(Request $request, $id) {
        $address = address::findOrFail($id);
        $address->update($request->all());
        return response()->json(['status' => 1, 'message' => __('lang.updated_successfully'),'data' => $address]);

    }
   
}
