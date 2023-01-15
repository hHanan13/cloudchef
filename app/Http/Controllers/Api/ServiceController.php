<?php

namespace App\Http\Controllers\Api;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class ServiceController extends Controller
{


    public function ListOfServices()
    {
        $services=Service::where('status',1)->latest()->get();


        return response()->json(['status' => 1, 'data' => $services]);

    }
}
