<?php

namespace App\Http\Controllers\Api;
use App\Models\seller;
use App\Models\perfume;
use App\Models\review_rating;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class SellerController extends Controller
{
    public function ListOfSellers()
    {
        $sellers=seller::get();

        return response()->json(['status' => 1, 'data' => $sellers]);

    }

    public function bySeller(seller $seller)
    {
        return seller::with('perfumeData' , 'reviewData')
                 ->where('id' , $seller->id)->get();
    }

    public function show($id)
    {
        return seller::find($id);
    }
    
    public function AddSeller(Request $request)
    {
        $rule = [
            'name_ar' => 'required',
            'name_en' => 'required',
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
        $seller = seller::create([

            'name_en' => $request['name_en'],
            'name_ar' => $request['name_ar'],
            'address' => $request['address'],
            'profile_image' => $request['profile_image'],
            'background_image' => $request['background_image'],

        ]);


        if ($request->hasFile('profile_image')) {
            $picture_name = time() . str_shuffle('abcdef') . '.' . $request->file('profile_image')->getClientOriginalExtension();
            Image::make($request->file('profile_image'))->save(public_path("$picture_name"));
            $request->request->set('profile_image', $picture_name);
            $seller->profile_image = $picture_name;
            $seller->save();
        }
        if ($request->hasFile('background_image')) {
            $picture_name = time() . str_shuffle('abcdef') . '.' . $request->file('background_image')->getClientOriginalExtension();
            Image::make($request->file('background_image'))->save(public_path("$picture_name"));
            $request->request->set('background_image', $picture_name);
            $seller->background_image = $picture_name;
            $seller->save();
        }

        return response()->json(['status' => 1, 'data' => $seller]);

    }

    public function Addsupport(Request $request)
    {
        $rule = [
            'subject' => 'required',
            'message' => 'required',
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
        $seller = seller::create([

            'name_en' => $request['name_en'],
            'name_ar' => $request['name_ar'],
            'address' => $request['address'],
            'subject' => $request['subject'],
            'message' => $request['message'],
            'profile_image' => $request['profile_image'],
            'background_image' => $request['background_image'],

        ]);
        return response()->json(['status' => 1,'message' => __('lang.added_successfully'), 'data' => $seller]);

    }
    
}
