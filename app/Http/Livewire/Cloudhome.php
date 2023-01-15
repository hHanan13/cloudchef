<?php

namespace App\Http\Livewire;

use Hash;
use Livewire\Component;
use App\Models\User;

class Cloudhome extends Component
{
    public $AddModelOpened = false;
    public $EditModelOpened = false;
    public $ShowModelOpened = false;
    public $dates;
    public $active;
    public $name;

    public $status;
    public $role_id = [];
    public $data;


    public $image, $first_name, $last_name, $email, $phone , $user, $created_at, $image_path, $u_id ,$city ,$capital ,$kind , $experience;

    public function render()
    {
        return view('livewire.cloudhome');
    }

    public function save()
    {

        $this->validate([

            'name' => 'required|string',
            'store_name' => 'required|string',
            'phone' => 'required|min:1',
            'email' => 'required|email|unique:users',


        ]);

        $user = User::create([

            'name' => $this->name,
            'store_name' => $this->store_name,
            'email' => $this->email,
            'city' => $this->city,
            'phone' => $this->phone,
            'kind' => $this->kind,
            'experience' => $this->experience,
            'capital' => $this->capital,
            'status' => isset($this->status) ? $this->status : 0,
        ]);
        $user->save();
        if ($user) {

            flash(trans('lang.added_successfully'));

        }

    }
}
