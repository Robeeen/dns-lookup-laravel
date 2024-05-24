<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class DnsLookup extends Component
{

    public $name;
    public $email;
    public $password;

    public function createNewuser(){
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
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
