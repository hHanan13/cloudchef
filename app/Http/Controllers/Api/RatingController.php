<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Rating;
use App\Models\Perfume;
use App\Models\Note;
use App\Models\merchant;
use App\Models\Package;

use Illuminate\Http\Request;

class RatingController extends Controller
{

    public function AddRating(Request $request)
    {
        $rule = [
            'id' => 'required',
            'star_rating' => 'required',
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
        elseif($request->type == 'note'){
            $type = 'App\Models\Note';
            $data = Note::find($request->id);
        }
        elseif($request->type == 'store'){
            $type = 'App\Models\merchant';
            $data = merchant::find($request->id);
        }
         elseif($request->type == 'package'){
            $type = 'App\Models\Package';
            $data = Package::find($request->id);
        }
        else{
            $type = 'App\Models\merchant';
            $data = merchant::find($request->id);
        }


        $Rating = Rating::where(['ratingable_id'=>$request->id , 'ratingable_type'=>$type , 'merchant_id'=>auth()->guard('api')->user()->id])->first();
        if($Rating){
            $Rating->update(['star_rating'=>$request->star_rating , 'comment'=>$request->comment]);
                    return response()->json(['status' => 1, 'data' => $Rating]);


                }
else{
        $data->review_ratings()->updateOrCreate([
         'star_rating' =>$request->star_rating,
          'comment' => $request->comments,
          'merchant_id'  => auth()->guard('api')->user()->id
      ]);
        return response()->json(['status' => 1, 'data' => $data]);

    }

    }

}
