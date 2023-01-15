<?php

namespace App\Http\Controllers\Api;

use App\Models\Slider;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class SliderController extends Controller
{


    public function ListOfSliders()
    {
        $sliders=Slider::where('status',1)->latest()->get();
        return response()->json(['status' => 1, 'data' => $sliders]);

    }
}
