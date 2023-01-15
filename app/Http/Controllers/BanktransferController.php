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
        
        $validated = $request->validate( [
            'name_en' => 'required|string',
            'email' => 'required|email',
        ]);
               
        $user= new banktransfer;
         $user->name_en = $request->name_en;
         $user->email = $request->email;

         if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'.$extension;
            $file->move(public_path('uploads/images/'), $filename);
            $user->image = 'uploads/images/'.$filename;
        }

        $user->save();
        return redirect()->back()->with('message', 'Added successfully');   
    }
}
