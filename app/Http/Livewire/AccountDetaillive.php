<?php

namespace App\Http\Livewire;

use App\Exports\AccountDetailsExport;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

use Livewire\Component;
use App\Models\account_detail;
use Hash;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class AccountDetaillive extends Component
{

    use WithPagination,
        WithFileUploads;

    public $data, $account_email, $current_password, $first_name, $last_name, $address, $account_detail,$uid , $selected_id;
    public $updateMode = false;
    public $active;
    public $search;
    public $AddModelOpened = false;
    public $EditModelOpened = false;
    public $ShowModelOpened = false;

    public function render()
    {
        $this->data = account_detail::all();

        $search = '%' . $this->search . '%';
        $query = account_detail::where('first_name', 'LIKE', $search)
            ->orderBy('id', 'DESC')->get();
        return view('livewire.AccountDetail.accountdetail', ['account_details' => $query]);
    }

    public function export()
    {
        return Excel::download(new AccountDetailsExport(), 'AccountDetail.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new AccountDetailsExport(), 'AccountDetail.csv');

    }

    public function exportPdf()
    {

        return Excel::download(new AccountDetailsExport(), 'AccountDetail.pdf');

    }


    private function resetInput()
    {
        $this->account_email = '';
        $this->current_password = '';
        $this->first_name = '';
        $this->last_name = '';
        $this->address = '';
    }


    public function store()
    {
        $this->validate([
            'account_email' => 'required',
            'current_password' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required'
        ]);

        $account_detail = account_detail::create([
            'account_email' => $this->account_email,
            'current_password' => $this->current_password,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'address' => $this->address
        ]);

        if ($account_detail) {
            $this->resetInput();

            flash(trans('lang.added_successfully'));

            $this->AddModelOpened = false;
        }
    }

    public function edit($id)
    {
        $record = account_detail::findOrFail($id);
        $this->selected_id = $id;
        $this->account_email = $record->account_email;
        $this->current_password = $record->current_password;
        $this->first_name = $record->first_name;
        $this->last_name = $record->last_name;
        $this->address = $record->address;
        $this->updateMode = true;
    }

    public function toggleEditModal($id)
    {
        $this->EditModelOpened = !$this->EditModelOpened;

        $account_detail = account_detail::find($id);

        if ($account_detail) {
            $this->getNote($account_detail);
        }
    }
    public function getNote($account_detail)
    {
        $this->account_detail = $account_detail;
        $this->account_email = $this->account_detail['account_email'];
        $this->current_password = $this->account_detail['current_password'];
        $this->first_name = $this->account_detail['first_name'];
        $this->last_name = $this->account_detail['last_name'];
        $this->address = $this->account_detail['address'];

        $this->created_at = isset($this->account_detail['created_at']) ? Carbon::parse($this->note['created_at'])->format('Y-m-d') : '';
        $this->uid = $this->account_detail['id'];
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

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $this->validate([
            'account_email' => 'required',
            'current_password' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required'
        ]);

        if ($this->selected_id) {
            $record = account_detail::find($this->selected_id);
            $record->update([
                'account_email' => $this->account_email,
                'current_password' => $this->current_password,
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'address' => $this->address
            ]);

            $this->updateMode = false;
            flash(trans('lang.updated_successfully'));
            $this->emit('userStore');
        }

    }

    public function destroy($id)
    {
        if ($id) {
            $record = account_detail::where('id', $id);
            $record->delete();
            flash(trans('lang.deleted_sucessfully'));
        }
    }

    
    public function activateAccountdetail($id)
    {
        // foreach ($client as $clientId)
        $record =account_detail::findOrNew($id);
        if($record->status == 0 ){
            $record->update(['status' => "1"]);
        }
        else{
            $record->update(['status' => "0"]);
        }
    }
}
