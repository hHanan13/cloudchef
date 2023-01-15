<?php

namespace App\Http\Controllers\Api;

use App\Models\Favourite;
use App\Models\Perfume;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class FavouriteController extends Controller
{

public function postFavourite(Request $request)
{
$rule = [
            'id' => 'required',
            'type'        => 'required'
        ];

        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);
        
        if ($validator->fails()) {
            if (str_contains(validationErrorsToString($validator->errors()), 'workshop_id')) {
                return response()->json(['status' => 423, 'message' => validationErrorsToString($validator->errors())], 422);
            }
            return response()->json(['status' => 422, 'message' => validationErrorsToString($validator->errors())], 422);
        }
        if($request->type == 'perfume'){
            $type = 'App\Models\Perfume';
            $data = Perfume::find($request->id);
        }
        else{
            $type = 'App\Models\Note';
            $data = Note::find($request->id);
        }
       

        $obj = Favourite::where(['favouriteable_id'=>$request->id , 'favouriteable_type'=>$type ,
                                  'merchant_id'=>auth()->guard('api')->user()->id])->first();
        if($obj){
            $obj->delete();
            return response()->json(['status' => 1, 'msg'=> trans('api.remove_from_favourite_success') ,'data' => $obj]);

        }
        else{
              $obj = Favourite::create(['favouriteable_id'=>$request->id ,
                                        'favouriteable_type'=>$type , 
                                        'merchant_id'=>auth()->guard('api')->user()->id]);
                return response()->json(['status' => 1, 'msg'=> trans('api.add_to_following_success') ,'data' => $obj]);

        }
       
        return response()->json(['status' => 1, 'data' => $data]);

    }

    public function ShowFavouritePerfume()
    {
        $products = Auth::guard('api')->user()->favouritePerfumes;
        return response()->json(['status' => 1, 'data' => $products]);

    }


    public function ShowFavouriteNote()
    {
        $notes = Auth::guard('api')->user()->favouriteNotes;
        return response()->json(['status' => 1, 'data' => $notes]);

    }
       public function listFavourites()
    {
        $products = Auth::guard('api')->user()->favourites;
        return response()->json(['status' => 1, 'data' => $products]);

    }
}