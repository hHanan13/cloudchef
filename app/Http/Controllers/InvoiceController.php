<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice;
use Carbon\Carbon;

class InvoiceController extends Controller
{
    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];

    public function index(Request $request)
    {
        if($request->filled('search')){
            $invoices = Invoice::search($request->search)->get();
        }
        else
        {
            $invoices = Invoice::get();
        }
      
        return view('dashboard.invoice',compact('invoices'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $invoices = DB::table('invoices')->where('email', 'like' , '%'.$search.'%')->paginate(5);
        return view('dashboard.home', compact('invoices'));

    }

    public function store(Request $request){
        
        $validated = $request->validate( [
            'client_name' => 'required|string',
            'email' => 'required|email|unique:jobs',
            'brand_name' => 'required',
            'phone' => 'required',
            'website' => 'required',
            'city' => 'required',
        ]);

        $user= new Invoice;
         $user->client_name = $request->client_name;
         $user->email = $request->email;
         $user->city = $request->city;
         $user->brand_name = $request->brand_name;
         $user->phone = $request->phone;
         $user->website = $request->website; 
         //$user->status = '1';
         
        $user->save();
        return redirect()->back()->with('message', 'Invoice Added'); 
    }
}
