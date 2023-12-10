<?php

namespace App\Livewire;
use App\Models\User;

use Livewire\Component;

class Clicker extends Component
{

    public function render()
    {

        $title = "test";
        $users = User::all();
        return view('livewire.clicker', [
            'title' => $title,
            'users' => $users
        ]);
    }

    public function handleClick() {
        dump("clicked");
    }

    
    public function createNewUser() {
        User::create([
            'name' => 'Blade test',
            'email' => 'blade@test.com',
            'password' => 'password'
        ]);
        
    }
    


}

