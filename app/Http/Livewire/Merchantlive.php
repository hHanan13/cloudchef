<?php

namespace App\Http\Livewire;

use App\Exports\MerchantExport;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\merchant;
use App\Models\Category;
use Hash;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\Request;

class Merchantlive extends Component
{
    use  WithFileUploads;

    public $data, $email, $password, $package_id, $merchant_name, $image , $image_path, $quantity, $discount, $price, $pay, $date, $selected_id;
    public $updateMode = false;
    public $cats;
    public $status;
    public $name;
    public $active;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {

        $this->data['merchants'] = merchant::latest()->when($this->active, function ($query) {

            $query->where('status', $this->active);

        })->search(trim($this->name))->simplePaginate(7);
        $this->data['total'] = merchant::count();        
        $this->cats = Category::all();
        return view('livewire.Merchantlive.merchantlive');
    }


    public function export()
    {
        return Excel::download(new MerchantExport(), 'Merchantlive.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new MerchantExport(), 'Merchantlive.csv');

    }

    public function exportPdf()
    {

        return Excel::download(new MerchantExport(), 'Merchantlive.pdf');

    }

    private function resetInput()
    {
        $this->email = '';
        $this->password = '';
        $this->merchant_name = '';
        $this->package_id = '';
        $this->image = '';
        $this->status = '';
    }

    public function store()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
            'merchant_name' => 'required',
            'package_id' => 'required',
        ]);

        // $this->password = Hash::make($this->password);

        $merchant = merchant::create([
            'email' => $this->email,
            'password' => $this->password,
            'merchant_name' => $this->merchant_name,
            'package_id' => $this->package_id,
            'status' => isset($this->status) ? $this->status : 0,
        ]);
//         if ($this->image) {
           
//             $thumbnail = $this->image;
// //            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
//             $filename = $thumbnail->hashName();
//             Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/merchants/' . $filename));
//             $merchant->image = $filename;
//             $merchant->store();
//         }
        $this->resetInput();
        $this->emit('userStore');
        flash(trans('lang.added_successfully'));
    }

    public function edit($id)
    {
        $record = merchant::findOrFail($id);
        $this->selected_id = $id;
        $this->email = $record->email;
        $this->password = $record->password;
        $this->merchant_name = $record->merchant_name;
        $this->package_id = $record->package_id;
        $this->image = $record->image;
        $this->status = $record->status;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
            'merchant_name' => 'required',
            'package_id' => 'required',
        ]);
        $merchant = merchant::find($this->selected_id);

        if ($this->selected_id) {
            $record = merchant::find($this->selected_id);
            $record->update([
                'email' => $this->email,
                'password' => $this->password,
                'merchant_name' => $this->merchant_name,
                'package_id' => $this->package_id,
                'status' => isset($this->status) ? $this->status : 0,
            ]);
            // if(request()->hasFile('image')){
            //     $image = $request->file('image');
            //     $filename = time() . '.' . $image->getClientOriginalExtension();
            //     Image::make($image)->resize(300, 300)->save( public_path('/images/merchants/' . $filename ) );
            //     $merchant->image = $filename;
            //     $merchant->store();
            //  }
            $this->updateMode = false;
            $this->emit('userStore');
            flash(trans('lang.updated_successfully'));
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = merchant::where('id', $id);
            $record->delete();
            flash(trans('lang.deleted_sucessfully'));
        }
    }
    public function activatemerchant($id)
    {
        // foreach ($client as $clientId)
        $record =merchant::findOrNew($id);
        if($record->status == 0 ){
            $record->update(['status' => "1"]);
        }
        else{
            $record->update(['status' => "0"]);
        }
    }
}
