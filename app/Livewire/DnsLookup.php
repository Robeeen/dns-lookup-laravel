<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class DnsLookup extends Component
{

    public $name;
    public $email;
    public $gender;
    public $password;
    public $usertype;
 

    public function createNewuser(){
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'gender' => $this->gender,
            'password' => $this->password,
            'usertype' => $this->usertype
        ]);
    }
    public function render()
    {
        $users = User::all();

        return view('livewire.dns-lookup', [
            'users' => $users
        ]);
    }
}
