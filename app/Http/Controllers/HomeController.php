<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\order_detail;
use App\Models\Perfume;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function charts()
    {

        // $result = Perfume::where('rate', '>', 0)
        //     ->orderBy('rate', 'DESC')
        //     ->get();

            // $result = Perfume::orderBy('rate', 'desc')->take(2)->get();

            // $result['perfume'] = Perfume::orderBy('rate', 'desc')->get('perfume_name_en')->toArray();

            $result['perfume']  = Perfume::orderBy('rate', 'desc')->pluck('perfume_name_en')->toArray();
            $result['total']  = Perfume::orderBy('rate', 'desc')->pluck('rate')->toArray();
            
            // $result['perfume'] = ['hanan' ,'ali'];
            // $result['total'] = [4,5];

        return response()->json($result);
    }

    public function chartsorder()
    {

        // $results = order_detail::get();

 $results['shipping'] = ['perfume1','perfume2','perfume3'];
            $results['amount'] = [1,3,5];
        return response()->json($results);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
