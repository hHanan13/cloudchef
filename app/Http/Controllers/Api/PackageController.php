<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\package;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use App\Models\checkout;
use App\Services\Payment;
use VMdevelopment\TapPayment\Facade\TapPayment;
use App\Models\Brand;
use App\Models\order_detail;
use App\Models\order;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon ;

class PackageController extends Controller
{
    public function index()
    {
        $package = package::where('status',1)->latest()->get();
        return response()->json($package);

    }

     public function show($id)
    {
        $package = package::find($id);
        return response()->json($package);

    }

}
