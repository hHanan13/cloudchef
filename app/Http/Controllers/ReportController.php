<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\merchant;
use App\Models\report;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index(Request $request)
    {
            $reports = merchant::where('id' , $request->id)
            ->with('reportData')
            ->first();
      
        return view('dashboard.report', compact('reports'));
    }

    public function bymerchant(Request $request)
    {
        $report = merchant::where('id' , $request->id)
                        ->with('reportData')
                        ->get();
        return response()->json($report);
    }

    public function store(Request $request , $id)
    {
        
        $User = merchant::findOrFail($id);
        $User->reportData()->create([
            'subject' => $request['subject'],
            'content' => $request['content'],
        ]);

        $User->save();

        return redirect()->back()->with('message', 'Report Added');        
        
    }

    public function update(Request $request ,$report_id)
    {
        $user = report::find($report_id);
        $user->subject = $request->subject;
        $user->content = $request->content;
        $user->save();
        return redirect()->back()->with('message', 'Report Updated');   
    }

    public function destroy(int $id)
    {
       $user = report::where('id', $id)->delete();
        
       return redirect()->back()->with('message', 'Report Deleted');   
        
    }

    public function contact(int $id)
    {
       $user = merchant::find($id);
       $user->update(['contact' => "1"]);
       return redirect()->back()->with('message', 'Client Contacted');   
        
    }
}
