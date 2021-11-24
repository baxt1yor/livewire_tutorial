<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class Register extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $passwordConfirmation = '';

    public function updatedName()
    {
        $this->validate([
            'name' => ['min:3']
        ]);
    }

    public function updatedEmail()
    {
        $this->validate([
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')
            ]
        ]);
    }

    public function register()
    {
        $validation = $this->validate([
            'name' => [
                'required',
                'string',
                'min:3'
            ],
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')
            ],
            'password' => [
                'required',
                Password::default(),
                'same:passwordConfirmation'
            ]
        ]);

        User::query()->create([
           'name' => $validation['name'],
           'email' => $validation['email'],
           'password' => bcrypt($validation['password'])
        ]);

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
