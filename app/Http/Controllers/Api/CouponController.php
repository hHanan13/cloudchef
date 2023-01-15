<?php

namespace App\Http\Controllers\Api;
use App\Models\Coupon;
use App\Models\cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CouponController extends Controller
{
   
  
    public function checkCoupon(Request $request){

              $rule = [
            'code' => 'required'
        ];

        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);
        if ($validator->fails()) {
            
            return response()->json(['status' => '0', 'message' => $validator->errors()]);
        }

        $coupon = Coupon::where('code', $request->code)->whereDate('start_date','<=', Carbon::today())->whereDate('end_date','>=', Carbon::today())->first();
        if(!$coupon){

           return response()->json(['status' => 1, 'message' => __('lang.Invalid_copoun'),'data' => $coupon ]);
                     }
        else{
        
        return response()->json(['status' => 1, 'message' => __('lang.loaded_successfully'),'data' => $coupon]);
    }
    }
}
