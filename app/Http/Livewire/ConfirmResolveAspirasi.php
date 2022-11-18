<?php

namespace App\Http\Livewire;

use App\Models\Aspirasi;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ConfirmResolveAspirasi extends ModalComponent
{
    public function render()
    {
        return view('livewire.confirm-resolve-aspirasi');
    }

    public function mount($aspirasi_id){
        $this->aspirasi_id = $aspirasi_id;
    }

    public function resolve(){
        $ticket = Aspirasi::where('id' ,$this->aspirasi_id)->first();
        $ticket->status = 2;
        $ticket->save();
        $this->closeModal();

        $this->emit('status-change');
    }
}
