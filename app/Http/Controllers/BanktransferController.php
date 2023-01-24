<?php

namespace App\Http\Controllers;

use App\Models\banktransfer;
use Illuminate\Http\Request;
use App\Traits\GeneralTrait;
use Illuminate\Support\Facades\Validator;
use Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BanktransferController extends Controller
{
    public function store(Request $request){
        
        $rule = [
            'email' => 'required|email',
            'name_en' => 'required',

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
        $banktransfer = banktransfer::create([


            'email' => $request['email'],
            'name_en' => $request['name_en'],

        ]);


        if ($request->hasFile('image')) {
            $picture_name = time() . str_shuffle('abcdef') . '.' . $request->file('image')->getClientOriginalExtension();
            Image::make($request->file('image'))->save(public_path("$picture_name"));
            $request->request->set('image', $picture_name);
            $banktransfer->image = $picture_name;
            $banktransfer->save();
        }

        return response()->json(['status' => 1, 'data' => $banktransfer]);


        // $validated = $request->validate( [
        //     'name_en' => 'required|string',
        //     'email' => 'required|email',
        // ]);
               
        // $user= new banktransfer;
        //  $user->name_en = $request->name_en;
        //  $user->email = $request->email;

        //  if($request->hasFile('image'))
        // {
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() .'.'.$extension;
        //     $file->move(public_path('uploads/images/'), $filename);
        //     $user->image = 'uploads/images/'.$filename;
        // }

        // $user->save();
        // return redirect()->back()->with('message', 'Added successfully');   
    }
}
