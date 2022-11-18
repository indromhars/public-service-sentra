<?php

namespace App\Http\Livewire\Aspirasi;

use App\Models\Aspirasi;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormAspirasi extends Component
{
    use WithFileUploads;

    public $aspirasi, $attachment;

    public $notification;

    protected $rules = [
        'aspirasi.topic'        => 'required|string|min:6',
        'aspirasi.description'  => 'required|string|max:3000',
        'aspirasi.location'     => 'required|string|max:300',
        'aspirasi.sender_name'  => 'required|string|max:100',
    ];

    public function mount()
    {
        $this->aspirasi = new Aspirasi();
    }

    public function render()
    {
        return view('livewire.form-aspirasi');
    }

    public function save()
    {
        $this->validate();
        $this->aspirasi->session_id = session('guest');

        if($this->attachment){
            $this->attachment->store('attachments');
            $this->aspirasi->attachment = $this->attachment->hashName();
        }

        $this->aspirasi->save();

        return redirect()->to('/history');
    }


}
