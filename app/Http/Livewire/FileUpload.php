<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;

    /** @var TemporaryUploadedFile $photo */
    public $photo;

    public function upload()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $this->photo->storeAs('photos', $this->photo->getClientOriginalName(), ['disk' => 'public']);
    }
    public function render()
    {
        return view('livewire.file-upload');
    }
}
