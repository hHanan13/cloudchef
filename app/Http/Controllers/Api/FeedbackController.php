<?php

namespace App\Http\Controllers\Api;
use App\Models\feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedback=feedback::where('status',1)->latest()->get();
        return response()->json(['status' => 1, 'data' => $feedback]);
    }

}
