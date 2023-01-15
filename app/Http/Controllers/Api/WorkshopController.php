<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\GeneralTrait;
use Session;
use App\Models\Perfume;
use App\Models\review_rating;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class WorkshopController extends Controller
{
    public function index()
    {
        $perfume = perfume::get();
        return response()->json($perfume);

        // return $this -> returnData('categories',$categories);
    }

    public function byworkshop(perfume $perfume)
    {
        return perfume::with('reviewData' , 'perfumeData')
                 ->where('id' , $perfume->id)->get();
    }

    public function AddWorkshop(Request $request)
    {
        $rule = [
            'name' => 'required',
            'email' => 'required',
            'comments' => 'required',
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
        $perfume = perfume::create([

            'perfume_name_en' => $request['perfume_name_en'],
            'perfume_name_ar' => $request['perfume_name_ar'],
            'desc_en' => $request['desc_en'],
            'price' => $request['price'],
            'desc_ar' => $request['desc_ar'],
            'quantity' => $request['quantity'],
            'discount' => $request['discount'],
            'category' => $request['category'],
            'stock' => $request['stock'],
            'availabilty' => $request['availabilty'],
            'rate' => $request['rate'],
            'image' => $request['image'],
            'date' => $request['date'],
            'count_in_rate' => $request['count_in_rate'],
            'star_rating' => $request['star_rating'],
            'count_in_stock' => $request['count_in_stock'],
            'name_inquiry' => $request['name_inquiry'],
            'email_inquiry' => $request['email_inquiry'],
            'text_inquiry' => $request['text_inquiry'],
        ]);

        if ($request->hasFile('image')) {
            $picture_name = time() . str_shuffle('abcdef') . '.' . $request->file('image')->getClientOriginalExtension();
            Image::make($request->file('image'))->save(public_path("$picture_name"));
            $request->request->set('image', $picture_name);
            $perfume->profile_image = $picture_name;
            $perfume->save();
        }

        return response()->json(['status' => 1, 'data' => $perfume]);

    }
}
