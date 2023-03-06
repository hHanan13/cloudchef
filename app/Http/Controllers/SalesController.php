<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\merchant;
use Carbon\Carbon;

class SalesController extends Controller
{
    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];

    public function index(Request $request)
    {
        if($request->filled('search')){
            $users = merchant::search($request->search)->get();
        }
        else
        {
            $users = merchant::get();
        }
        $prorest= merchant::where('status',1)->latest()->paginate(5);
        $newrest= merchant::where('status',0)->latest()->paginate(5);

        return view('dashboard.sales', compact('users','prorest','newrest'));
    }

    public function contact(int $id)
    {
       $user = merchant::find($id);
       $user->update(['contact' => "1"]);
       return redirect()->back()->with('message', 'Client Contacted');   
        
    }
}
