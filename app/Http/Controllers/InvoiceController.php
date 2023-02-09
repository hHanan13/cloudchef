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
}
