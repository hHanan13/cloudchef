<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Package;
use App\Models\order_detail;
use Hash;
use Carbon\Carbon;

class Report extends Component
{
    public $data, $date, $total , $status , $order , $selected_id ;
    public $updateMode = false;
    public $search;

    public function mount(Package $name)
    {
        $this->packagesCount = Package::with('order_details')->get();
        return $this->packagesCount;
    }
    
    public function render()
    {        
        $this->data = Package::all();
    
    //    $search = '%'.$this->search.'%';
    //    $query = Package::where('status' , 'LIKE' , $search )
    //             ->orderBy('id' , 'DESC')->get();

        return view('livewire.Report.report');
    }

    // public function activateRequest($id)
    // {
    //     // foreach ($client as $clientId)
    //     $category =Category::findOrNew($id);
    //     if($category->status == 0 ){
    //         $category->update(['status' => "1"]);
    //     }
    //     else{
    //         $category->update(['status' => "0"]);
    //     }
    // }
}
