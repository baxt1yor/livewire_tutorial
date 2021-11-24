<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;
use App\Models\Contact as Model;

class Contact extends Component
{
    public Collection $contacts;

    public function mount()
    {
        $this->contacts = Model::query()->get();
    }

    public function render()
    {
        return view('livewire.contact');
    }

    public function removeContact(int $id)
    {
        Model::query()->find($id)->delete();
        $this->contacts = Model::query()->get();
    }

    public function refreshChildren()
    {
        $this->emit("refreshChildren");
    }
}
