<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages= Page::where('status',1)->latest()->get();
        return response()->json(['status' => 1, 'message' => 'load success', 'data'=>$pages]);

    }

     public function show($id)
    {
        $page= Page::find($id);
        return response()->json(['status' => 1, 'message' => 'load success', 'data'=>$page]);

    }
}
