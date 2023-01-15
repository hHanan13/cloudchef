<?php

namespace App\Http\Controllers\Api;
use App\Models\ThemeSetting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThemeSettingController extends Controller
{
    public function ListOfThemeSetting()
    {
        $ThemeSetting = ThemeSetting::get();

        return response()->json(['status' => 1, 'data' => $ThemeSetting]);

    }

    public function show($id)
    {
        return ThemeSetting::find($id);
    }

    public function store(Request $request)
    {
        $rule = [
            'footer_color' => 'required',
            'header_color' => 'required',
            'hover' => 'required',
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
        $ThemeSetting = ThemeSetting::create([

            'footer_color' => $request['footer_color'],
            'header_color' => $request['header_color'],
            'hover' => $request['hover'],
        ]);

        return response()->json(['status' => 1, 'message' => __('lang.added_successfully'),'data' => $ThemeSetting]);

    }

    public function update(Request $request, $id)
    {
        $ThemeSetting = ThemeSetting::findOrFail($id);
        $ThemeSetting->update($request->all());

        return $ThemeSetting;
    }
}
