<?php

namespace App\Http\Livewire;

use App\Models\Aspirasi;
use LivewireUI\Modal\ModalComponent;

class ViewAttachment extends ModalComponent
{
    public $aspirasi;

    public function mount(Aspirasi $aspirasi_id){
        $this->aspirasi = $aspirasi_id;
    }

    public function render()
    {
        return view('livewire.view-attachment');
    }
}
