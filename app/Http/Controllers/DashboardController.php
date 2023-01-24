<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\merchant;
use App\Models\job;
use App\Models\banktransfer;
use Carbon\Carbon;

class DashboardController extends Controller
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
      
        $currentjobs= job::where('status',1)->latest()->paginate(5);
        $bank= banktransfer::latest()->paginate(5);
        $trainingjobs= job::where('status',0)->latest()->paginate(5);
        return view('dashboard.home', compact('users','currentjobs','trainingjobs'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $users = DB::table('merchants')->where('name', 'like' , '%'.$search.'%')->paginate(5);
        return view('dashboard.home', compact('users'));

    }
    
    public function changeStatus(Request $request)
    {
        $user = merchant::find($request->id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
}
