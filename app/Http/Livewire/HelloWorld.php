<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public string $name = "John";

    public function mount(string $name)
    {
        $this->name = $name;
    }

    public function updated()
    {
        $this->name = "uodated@";
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
