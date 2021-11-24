<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class Login extends Component
{
    public string $email = '';
    public string $password = '';

    public function login()
    {
        $this->validate([
            'email' => [
                'required',
                'string',
                'email'
            ],
            'password' => [
                'required',
                Password::default()
            ]
        ]);

        if (Auth::attempt(["email" => $this->email, "password" => $this->password])) {
            session()->flash("message", "You are login success fully!");
        } else {
            session()->flash("error", "Email and password are wrong!");
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
