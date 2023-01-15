<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\account_detail;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Hash;

class AccountDetailController extends Controller
{

    public function index()
    {
        $account_detail = account_detail::get();
        return response()->json($account_detail);
    }

    public function store(Request $request){
        $rule = [
            
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'account_email' => 'required|email',
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
            'offer_name' => 'required',
            'address' => 'required',
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
        $account_detail = account_detail::create([


            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],

            'account_email' => $request['account_email'],
            'current_password' => $request['current_password'],
            'new_password' => $request['new_password'],
            'confirm_password' => $request['confirm_password'],
            'offer_name' => $request['offer_name'],
            'address' => $request['address'],

        ]);


        return response()->json(['status' => 1, 'message' => __('lang.added_successfully'),'data' => $account_detail]);
    }

    public function show($id)
    { 
        return account_detail::find($id);
    }

    public function byAccountDetail(Request $request)
    {
        return account_detail::with('addressData')
                 ->where('id' , $request->id)->get();
    }

    public function update(Request $request, $id) {
        $account_detail = account_detail::findOrFail($id);
        $account_detail->update($request->all());
    
        return response()->json(['status' => 1, 'message' => __('lang.updated_successfully'),'data' => $account_detail]);

    }
    public function change_password(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'current_password' => 'required',
            'new_password' => 'required|min:8|max:100',
            'confirm_password' => 'required|same:new_password',
        ]);
        if ($validator->fails()){
            return response()->json([
                'message'=>'Validations fails',
                'errors'=>$validator->errors()
            ],422);
        }

        $user = $request->user();
        if(Hash::check($request->current_password,$user->new_password)){
            $user->update([
                'new_password'=>Hash::make($request->new_password)
            ]);
            return response()->json([
                'message'=>'Password successfully updated',
            ],200);
        }
        else{
            return response()->json([
                'message'=>'Old password does not matched',
            ],400);
        }

    }
}
