<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\feedback;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Perfume;



class InquiryController extends Controller
{
    

    public function Addfeedback(Request $request)
    {
        $rule = [

            'text' => 'required',
            'name' => 'required',
            'email' => 'required',
            'id'    => 'required',
            'feedbackable_type'  => 'required'
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
        if($request->feedbackable_type == 'perfume')
            $data = Perfume::find($request->id);
        elseif($request->feedbackable_type == 'note')
            $data = Note::find($request->id);

        $data->feedback_request()->create([
         'text' =>$request->text,
         'email' =>$request->email,
          'name' => $request->name,
      ]);
        return response()->json(['status' => 1, 'data' => $data]);
    }
}
