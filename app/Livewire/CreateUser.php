<?php
namespace App\Livewire;

use App\Http\Requests\registerUser;
use App\Models\User;
use Livewire\Component;

class CreateUser extends Component
{

    
    public $name, $ci_card, $email, $city, $address, $phone, $username, $password;

    public function create()
    {

        User::create([
            'name'     => $this->name,
            'ci_card'  => $this->ci_card,
            'email'    => $this->email,
            'city'     => $this->city,
            'address'  => $this->address,
            'phone'    => $this->phone,
            'username' => $this->username,
            'password' => $this->password,

        ]);


        $this->dispatch('render');
        $this->dispatch('close-modal');
        $this->reset([
            'name',
            'ci_card',
            'email',
            'city',
            'address',
            'phone',
            'username',
            'password'
        ]);
        

    }

    public function render()
    {
        return view('livewire.create-user');
    }
}
