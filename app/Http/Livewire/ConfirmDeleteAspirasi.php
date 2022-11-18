<?php

namespace App\Http\Livewire;

use App\Models\Aspirasi;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ConfirmDeleteAspirasi extends ModalComponent
{
    public function render()
    {
        return view('livewire.confirm-delete-aspirasi');
    }

    public function mount($aspirasi_id){
        $this->aspirasi_id = $aspirasi_id;
    }


    public function delete(){
        $ticket = Aspirasi::where('id', $this->aspirasi_id)->first();
        $ticket->delete();
        $this->closeModal();

        $this->emit('status-change');    }
}
