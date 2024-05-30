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
 
    //To create a row from data inserted from front-end
    public function createNewuser(){
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'gender' => $this->gender,
            'password' => $this->password,
            'usertype' => $this->usertype
        ]);
    }
    //To delete a record from the front-end
    public function deleteUser($id){
        $data = User::find($id);
        if($data){
            $data->delete();
        }
    }

    //Rendering.
    public function render()
    {
        $users = User::all();
        return view('livewire.dns-lookup', [
            'users' => $users
        ]);
    }
}
