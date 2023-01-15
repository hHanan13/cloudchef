<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\job;
use App\Traits\GeneralTrait;
use Illuminate\Support\Facades\Validator;
use Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    // public $image;

    public function index()
    {
        $job = job::get();
        return response()->json($job);
    }
    public function store(Request $request){
        
        $validated = $request->validate( [
            'name' => 'required|string',
            'email' => 'required|email|unique:jobs',
        ]);

        if (!$request->has('file_job')) {
            return response()->json(['message' => 'Missing file'], 422);
        }
        
        $imageName = time().'.'.$request->image->extension();
       
        $user= new Job;
         $user->name = $request->name;
         $user->job_name = $request->job_name;
         $user->email = $request->email;
         $user->city = $request->city;
         $user->age = $request->age;
         $user->phone = $request->phone;
         $user->type = $request->type;
         $user->work_from = $request->work_from; 
         $user->notes = $request->notes; 
         $user->status = '1';
         if($request->hasFile('file_job'))
        {
            $file = $request->file('file_job');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'.$extension;
            $file->move(public_path('uploads/files/'), $filename);
            $user->file_job = 'uploads/files/'.$filename;
        }
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'.$extension;
            $file->move(public_path('uploads/images/'), $filename);
            $user->image = 'uploads/images/'.$filename;
        }

        $user->save();
        return redirect('/confirm')->with('status', 'added_successfully');
    }

    public function storetraining(Request $request){
        
        $validated = $request->validate( [
            'name' => 'required|string',
            'email' => 'required|email|unique:jobs',
        ]);

        if (!$request->has('file_job')) {
            return response()->json(['message' => 'Missing file'], 422);
        }
        
        $imageName = time().'.'.$request->image->extension();

        $user= new Job;
         $user->name = $request->name;
         $user->job_name = $request->job_name;
         $user->email = $request->email;
         $user->city = $request->city;
         $user->age = $request->age;
         $user->phone = $request->phone; 
         $user->type = $request->type;
         $user->work_from = $request->work_from; 
         $user->notes = $request->notes; 
         $user->status = '0';

         if($request->hasFile('file_job'))
        {
            $file = $request->file('file_job');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'.$extension;
            $file->move(public_path('uploads/files/'), $filename);
            $user->file_job = 'uploads/files/'.$filename;
        }
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'.$extension;
            $file->move(public_path('uploads/images/'), $filename);
            $user->image = 'uploads/images/'.$filename;
        }

        $user->save();
        return redirect('/confirm')->with('status', 'added_successfully');
    }
}
