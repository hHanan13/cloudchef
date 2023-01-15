<?php

namespace App\Http\Livewire;
use Intervention\Image\Facades\Image;
use App\Exports\PerfumeExport;
use App\Models\Category;
use App\Models\Perfume;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Hash;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use Image as InterventionImage;

class Perfumelivewire extends Component
{
    use WithPagination,
    WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public $data, $perfume_name_en,  $perfume_name_ar, $price, $category,$desc_en, $desc_ar, $sum , $stock, $quantity, $count_in_stock , $count_in_rate, $image, $discount, $date, $perfume ,$image_path , $selected_id ;
    public $updateMode = false;
    public $active;
    public $name;
    public $status;
    public $cats;
    public $count = 0;
    public $EditModelOpened = false;
 
    public function increment()
    {
        $count_in_rate = $this->count++;
    }

    public function render()
    {
        
        $this->data['total'] = Perfume::count();
        $this->data = Perfume::all();
        $this->cats = Category::all();
        // $sum = Perfume::count();
        return view('livewire.perfumes.perfumelivewire');
    }


    public function export()
    {
        return Excel::download(new PerfumeExport(), 'perfume.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new PerfumeExport(), 'perfume.csv');

    }

    public function exportPdf()
    {

        return Excel::download(new PerfumeExport(), 'perfume.pdf');

    }

    private function resetInput()
    {
        $this->perfume_name_en = '';
        $this->perfume_name_ar = '';
        $this->price = '';
        $this->discount = '';
        $this->category = '';
        $this->desc_en = '';
        $this->desc_ar = '';
        $this->quantity = '';
        $this->stock = '';
        $this->image = '';
        $this->status = '';
    }


    public function store()
    {
        $this->validate([
            'perfume_name_en' => 'required',
            'perfume_name_ar' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'category' => 'required',
            'desc_en' => 'required',
            'desc_ar' => 'required',
            'quantity' => 'required',
            'stock' => 'required',
        ]);

        $perfume = Perfume::create([
            'perfume_name_en' => $this->perfume_name_en,
            'perfume_name_ar' => $this->perfume_name_ar,
            'price' => $this->price,
            'discount' => $this->discount,
            'category' => $this->category,
            'desc_en' => $this->desc_en,
            'desc_ar' => $this->desc_ar,
            'quantity' => $this->quantity,
            'stock' => $this->stock,
            'status' => isset($this->status) ? $this->status : 0,
        ]);
        // if ($this->image) {
        //     $thumbnail = $this->image;
        //     $filename = $thumbnail->hashName();
        //     Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/perfumes/' . $filename));
        //     $perfume->image = $filename;
        //     $perfume->store();
        // }
        if ($this->image) {
            $thumbnail = $this->image;
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/perfumes/' . $filename));
            $perfume->image = $filename;
            
            $perfume->save();
        }
        $this->resetInput();
        $this->emit('userStore');
        flash(trans('lang.added_successfully'));
        $this->emit('userStore');

    }

    public function edit($id)
    {
        $record = Perfume::findOrFail($id);
        $this->selected_id = $id;
        $this->perfume_name_en = $record->perfume_name_en;
        $this->perfume_name_ar = $record->perfume_name_ar;
        $this->price = $record->price;
        $this->discount = $record->discount;
        $this->category = $record->category;
        $this->desc_en = $record->desc_en;
        $this->desc_ar = $record->desc_ar;
        $this->quantity = $record->quantity;
        $this->count_in_stock = $record->quantity;
        $this->stock = $record->stock;
        $this->image = $record->image;
        $this->status = $record->status;
        $this->image_path = $record->image_path;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'perfume_name_en' => 'required|string',
            'perfume_name_ar' => 'required|string',
        ]);
        $Perfume = Perfume::find($this->selected_id);
        $Perfume->update([

            'perfume_name_en' => $this->perfume_name_en,
            'perfume_name_ar' => $this->perfume_name_ar,
            'desc_en' => $this->desc_en,
            'desc_ar' => $this->desc_ar,
            'stock' => $this->stock,
            'price' => $this->price,
            'discount' => $this->discount,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'status' => isset($this->status) ? $this->status : 0,
        ]);
        
        // if(request()->hasFile('image')){
        //     $image = $request->file('image');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     Image::make($image)->resize(300, 300)->save( public_path('/images/perfumes/' . $filename ) );
        //     $Perfume->image = $filename;
        //     $Perfume->save();
        //  }
        if(request()->hasFile('image')){
         $image = $request->file('image');
        $input['image'] = time().'.'.$image->getClientOriginalExtension();
        
        $destinationPath = public_path('/images/perfumes/');
        $imgFile = Image::make($image->getRealPath());
        $imgFile->resize(150, 150, function ($constraint) {
		    $constraint->aspectRatio();
		})->save($destinationPath.'/'.$input['image']);
        $destinationPath = public_path('/images/perfumes/');
        $image->move($destinationPath, $input['image']);
    }
        if ($Perfume) {
            $this->updateMode = false;
            $this->resetInput();
            flash(trans('lang.updated_successfully'));
            $this->emit('userStore');
        }
    }
    public function toggleEditCloseModal()
    {
        $this->EditModelOpened = false;

    }

    public function destroy($id)
    {
        if ($id) {
            $record = Perfume::where('id', $id);
            $record->delete();
            flash(trans('lang.deleted_sucessfully'));
        }
    }
    
    public function activatePerfume($id)
    {
        // foreach ($client as $clientId)
        $record =Perfume::findOrNew($id);
        if($record->status == 0 ){
            $record->update(['status' => "1"]);
        }
        else{
            $record->update(['status' => "0"]);
        }
    }
}
