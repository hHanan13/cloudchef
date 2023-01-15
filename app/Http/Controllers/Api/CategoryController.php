<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class CategoryController extends Controller
{


    public function ListOfCategories()
    {
        $categories=Category::where('status',1)->latest()->get();

        return response()->json(['status' => 1, 'data' => $categories]);

    }

    public function activateCategory($id)
{
    // foreach ($client as $clientId)
    $categories =Category::findOrNew($id);
    if($categories->status == 0 ){
        $categories->update(['status' => "1"]);
    }
    else{
        $categories->update(['status' => "0"]);
    }
}

// public function deactivateCategory($id)
// {
//     // foreach ($client as $clientId)
//     Category::findOrNew($id)->update(['status' => "0"]);
// }
}
