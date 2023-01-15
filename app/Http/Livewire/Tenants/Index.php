<?php

namespace App\Http\Livewire\Tenants;
use App\Http\Requests\Request;
use App\Models\Tenant;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Hash;

class Index extends Component
{
    public $AddModelOpened = false;
    public $EditModelOpened = false;
    public $ShowModelOpened = false;
    public $dates;
    public $active;

    public $status;
    public $data;
    protected $paginationTheme = 'bootstrap';

    public $name, $tenant, $created_at, $uid , $domain, $database ,$total;

    public function render()
    {
        $this->data['total'] = Tenant::count();
        $this->data = Tenant::all();
        return view('livewire.tenant.index');
    }

    public function save()
    {
        $this->validate([

            'name' => 'required|string',
            'domain' => 'required|string',
            'database' => 'required|string',

        ]);

        $tenant = Tenant::create([

            'name' => $this->name,
            'domain' => $this->domain,
            'database' => $this->database,

        ]);

        if ($tenant) {
            $this->resetInput();

            flash(trans('lang.added_successfully'));

            $this->AddModelOpened = false;
        }

    }

    public function edit($id)
    {

        $tenant = Tenant::find($id);

        if ($tenant) {

            $this->getNote($tenant);
        }

    }

    public function update()
    {
        $this->validate([

            'name' => 'required|string',
            'domain' => 'required|string',
            'database' => 'required|string',

        ]);

        $tenant = Tenant::find($this->uid);

        $tenant->update([

            'name' => $this->name,
            'domain' => $this->domain,
            'database' => $this->database,
            
        ]);
    
        if ($tenant) {
            $this->EditModelOpened = false;
            $this->resetInput();

            flash(trans('lang.updated_successfully'));

        }
    }

    public function show($id)
    {
        $tenant = Tenant::find($this->uid);

        if ($tenant) {

            $this->getNote($tenant);
        }
    }

    public function getNote($tenant)
    {
        $this->tenant = $tenant;
        $this->name = $this->tenant['name'];
        $this->domain = $this->tenant['domain'];
        $this->database = $this->tenant['database'];

        $this->created_at = isset($this->tenant['created_at']) ? Carbon::parse($this->tenant['created_at'])->format('Y-m-d') : '';
        $this->uid = $this->tenant['id'];
    }

    public function toggleShowModal($id)
    {
        $this->ShowModelOpened = !$this->ShowModelOpened;

        $tenant = Tenant::find($id);

        if ($tenant) {

            $this->getNote($tenant);
        }

    }

    public function ShowModalClose()
    {
        $this->ShowModelOpened = false;
    }

    public function toggleEditModal($id)
    {

        $this->EditModelOpened = !$this->EditModelOpened;

        $tenant = Tenant::find($id);

        if ($tenant) {
            $this->getNote($tenant);
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
        $this->name = '';
        $this->domain = '';
        $this->database = '';
        $this->created_at = '';

    }

    public function destroy($id)
    {
        $tenant = Tenant::find($id);
       
        if ($tenant) {
            $tenant->delete();

            flash(trans('lang.deleted_sucessfully'));

        }
    }

    public function activateTenant($id)
    {
        // foreach ($client as $clientId)
        $tenant =Tenant::findOrNew($id);
        if($tenant->status == 0 ){
            $tenant->update(['status' => "1"]);
        }
        else{
            $tenant->update(['status' => "0"]);
        }
    }
}
