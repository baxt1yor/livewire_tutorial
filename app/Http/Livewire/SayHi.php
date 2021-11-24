<?php

namespace App\Http\Livewire;

use App\Models\Contact as ContactModel;
use Livewire\Component;

class SayHi extends Component
{
    public ContactModel $contact;

    public $listeners = ["refreshChildren" => "refreshMe"];

    public function refreshMe()
    {

    }

    public function mount(ContactModel $contact)
    {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.say-hi');
    }
}
