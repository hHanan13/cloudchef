<?php

namespace App\Http\Livewire\Notes;
use App\Http\Requests\Request;
use App\Exports\NotesExport;
use App\Models\Note;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Hash;
use Maatwebsite\Excel\Facades\Excel;

class Index extends Component
{
    use WithFileUploads;

    public $AddModelOpened = false;
    public $EditModelOpened = false;
    public $ShowModelOpened = false;
    public $dates;
    public $active;
    public $name;
    public $notes;

    public $status;
    public $data;
    protected $paginationTheme = 'bootstrap';

    public $name_ar, $name_en, $note, $created_at, $uid, $image_path, $image ,$desc_en, $desc_ar, $stock, $price;


    public function render()
    {

        $this->data['notes'] = Note::latest()->when($this->active, function ($query) {

            $query->where('status', $this->active);

        })->search(trim($this->name))->simplePaginate(7);
        
        $notes= new Note ();

        $notes->increaseStock(10);

        $this->data['total'] = Note::count();
        return view('livewire.notes.index');
    }

    public function export()
    {
        return Excel::download(new NotesExport(), 'notes.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new NotesExport(), 'notes.csv');

    }

    public function exportPdf()
    {
//        return (new UsersExport)->download('users.pdf', \Maatwebsite\Excel\Excel::MPDF);

        return Excel::download(new NotesExport(), 'notes.pdf');

    }

    public function save()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',
//            'image' => 'required',

        ]);

        $note = Note::create([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'desc_en' => $this->desc_en,
            'desc_ar' => $this->desc_ar,
            'stock' => $this->stock,
            'price' => $this->price,

            'status' => isset($this->status) ? $this->status : 0,
        ]);

        if ($this->image) {
           
            $thumbnail = $this->image;
            
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/notes/' . $filename));
            $note->image = $filename;
          
            $note->save();
        }

        if ($note) {
            $this->resetInput();

            flash(trans('lang.added_successfully'));

            $this->AddModelOpened = false;
        }


    }

    public function edit($id)
    {

        $note = Note::find($id);

        if ($note) {

            $this->getNote($note);
        }

    }

    public function update()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',

        ]);

        $note = Note::find($this->uid);

        $note->update([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'desc_en' => $this->desc_en,
            'desc_ar' => $this->desc_ar,
            'stock' => $this->stock,
            'price' => $this->price,
            'status' => isset($this->status) ? $this->status : 0,
        ]);
        
        if(request()->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( public_path('/images/notes/' . $filename ) );
            $note->image = $filename;
            $note->save();
         }
       
        if ($note) {
            $this->EditModelOpened = false;
            $this->resetInput();

            flash(trans('lang.updated_successfully'));

        }
    }

    public function show($id)
    {
        $note = Note::find($this->uid);

        if ($note) {

            $this->getNote($note);
        }
    }

    public function getNote($note)
    {
        $this->note = $note;
        $this->name_ar = $this->note['name_ar'];
        $this->name_en = $this->note['name_en'];
        $this->desc_en = $this->note['desc_en'];
        $this->desc_ar = $this->note['desc_ar'];
        $this->stock = $this->note['stock'];
        $this->price = $this->note['price'];
        $this->status = $this->note['status'];
        $this->image_path = $this->note['image_path'];
        $this->image = $this->note['image'];

        $this->created_at = isset($this->note['created_at']) ? Carbon::parse($this->note['created_at'])->format('Y-m-d') : '';
        $this->uid = $this->note['id'];
    }

    public function toggleShowModal($id)
    {
        $this->ShowModelOpened = !$this->ShowModelOpened;

        $note = Note::find($id);

        if ($note) {

            $this->getNote($note);
        }

    }

    public function ShowModalClose()
    {
        $this->ShowModelOpened = false;
    }

    public function toggleEditModal($id)
    {

        $this->EditModelOpened = !$this->EditModelOpened;

        $note = Note::find($id);

        if ($note) {
            $this->getNote($note);
        }
    }

    public function toggleEditCloseModal()
    {
        $this->EditModelOpened = false;
    }

    public function toggleAddModal()
    {

        $this->AddModelOpened = !$this->AddModelOpened;
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->name_ar = '';
        $this->name_en = '';
        $this->desc_en = '';
        $this->desc_ar = '';
        $this->stock = '';
        $this->price = '';
        $this->status = '';
        $this->created_at = '';
        $this->image = '';

    }

    public function destroy($id)
    {
        $note = Note::find($id);

        if ($note->image) {

            if (File::exists('images/notes/' . $note->image)) {
                unlink('images/notes/' . $note->image);
            }
        }
       
        if ($note) {
            $note->delete();

            flash(trans('lang.deleted_sucessfully'));

        }
    }

    public function activateCategory($id)
    {
        // foreach ($client as $clientId)
        $note =Note::findOrNew($id);
        if($note->status == 0 ){
            $note->update(['status' => "1"]);
        }
        else{
            $note->update(['status' => "0"]);
        }
    }
}
