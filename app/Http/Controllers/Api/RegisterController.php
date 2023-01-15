<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\merchant;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Traits\GeneralTrait;
use Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'merchant_name' => 'required|string|max:255',
            'phone' => 'min:8',
            'store_name' => 'string|max:255',
            'store_link' => 'string|max:255',
            'email' => 'required|email|string|max:255',
            'password' => 'required|string|min:8|',
            'type'    =>'required'
        ]);
        if ($validator->fails()){
            return response()->json([
                'message'=>'Validations fails',
                'errors'=>$validator->errors()
            ],422);
        }
       
        $User = merchant::create([

            'merchant_name' => $request['merchant_name'],
            'password' => bcrypt($request['password']),
            'email' => $request['email'],
            'last_name' => $request['last_name'],
            'phone' => $request['phone'],
            'store_name' => $request['store_name'],
            'store_link' => $request['store_link'],
            'type'      => $request->type 

        ]);
        return response()->json([
            'message'=>__('lang.added_successfully'),
            'data'=>$User
        ],200);

    }

   
    public function change_password(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'old_password' => 'required',
            'password' => 'required|min:8|max:100',
            'confirm_password' => 'required|same:password',
        ]);
        if ($validator->fails()){
            return response()->json([
                'message'=>'Validations fails',
                'errors'=>$validator->errors()
            ],422);
        }

        $user = auth()->guard('api')->user();
        if(Hash::check($request->old_password,$user->password)){
            $user->update([
                'password'=>Hash::make($request->password)
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

    public function login(Request $request)
    {
       
    $validator = validator()->make($request->all(), [
            'email' => 'bail|required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'=>0,
                'msg'=>trans('api.login_failed'), 
                'errors' => $validator->errors()->all()
            ]);

        }
            if(Auth::guard('api_app')->attempt(['email' => $request->email, 'password' => $request->password ])){
                $user = Auth::guard('api_app')->user();

                if($user->status == 0){
                    auth()->guard('api_app')->logout();
                    return response()->json(['status' => '0', 'msg' => trans('api.account_blocked')]);
                }
                $user['token'] = $user->createToken('eventRight')->accessToken;
                return response()->json(['msg' => trans('api.login_success'), 'data' => $user,'status'=>'1'], 200);
            }
            else{
                return response()->json(['msg' => trans('api.invaild_creditional'), 'data' => null,'status'=>'0']);
            }
    }


    public function profile()
    {
        $account_detail = auth()->guard('api')->user();
        return response()->json($account_detail);
    }

       public function updateProfile(Request $request) 
       {

            $request->merge(['first_name'=>$request->merchant_name]);
          auth()->guard('api')->user()->update($request->all());
        return response()->json(['status' => 1, 'message' => __('lang.updated_successfully'),'data' => auth()->guard('api')->user()]);

       }
    
}
