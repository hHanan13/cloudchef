<?php

namespace App\Http\Controllers\Api;
use App\Models\following;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Traits\GeneralTrait;
use Hash;

class followController extends Controller
{
    public function showfollowers(Request $request)
    {

        return auth()->guard('api')->user()->follower->where('status', '1')
                                                       ->get();
    }
}
