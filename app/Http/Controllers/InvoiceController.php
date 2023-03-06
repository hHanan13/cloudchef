<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\merchant;
use Carbon\Carbon;

class InvoiceController extends Controller
{
    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];

    public function index(Request $request)
    {
        // if($request->filled('search')){
        //     $invoices = Invoice::search($request->search)->get();
        // }
        // else
        // {
        //     $invoices = Invoice::get();
        // }
        if($request->filled('search')){
            $clients = merchant::search($request->search)->where('invoice_status',0)->get();
        }
        else
        {
            $clients = merchant::where('invoice_status',0)->get();
        }
        $invoices= Invoice::latest()->paginate(5);
        // $clients= merchant::where('invoice_status',0)->latest()->paginate(5);
        return view('dashboard.invoice',compact('invoices','clients'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $clients = DB::table('merchants')->where('email', 'like' , '%'.$search.'%')->paginate(5);
        return view('dashboard.home', compact('clients'));

    }

    public function store(Request $request){
        
        $validated = $request->validate( [
            'name' => 'required|string',
            'email' => 'required|email|unique:merchants',
            'store_name' => 'required',
            'phone' => 'required',
            'num_branches' => 'required',
            'num_emp' => 'required',
            'website' => 'required',
            'city' => 'required',
        ]);

        $user= new merchant;
         $user->name = $request->name;
         $user->email = $request->email;
         $user->city = $request->city;
         $user->store_name = $request->store_name;
         $user->num_branches = $request->num_branches;
         $user->num_emp = $request->num_emp;
         $user->phone = $request->phone;
         $user->website = $request->website; 
         $user->invoice_status = '0';
         
        $user->save();
        return redirect()->back()->with('message', 'New  Client Added'); 
    }

    public function storeinvoice(Request $request){
        
        $validated = $request->validate( [
            'date' => 'required',
            'clock' => 'required',
            'product' => 'required',
            'quantity' => 'required',
            'notes' => 'required',
        ]);

        $user= new Invoice;
         $user->date = $request->date;
         $user->clock = $request->clock;
         $user->product = $request->product;  
         $user->quantity = $request->quantity;
         $user->notes = $request->notes;
         
         if($request->product == 'all'){
            $user->price = '2000 SR';
            $user->discount = (int)$request->discount / 100;
            $user->final_price = (((int)$user->price) - ((int)$user->price * $user->discount)) * (int)$user->quantity;
        }
      
        else{
            $user->price = '3000 SR';
            $user->discount = (int)$request->discount / 100;
            $user->final_price = (((int)$user->price) - ((int)$user->price * $user->discount)) * (int)$user->quantity;
        }
         //$user->status = '1';
        //  dd($user);
        $user->save();
        return redirect()->back()->with('message', 'Invoice Added'); 
    }
}
