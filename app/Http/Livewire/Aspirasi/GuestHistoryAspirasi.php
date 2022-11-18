<?php

namespace App\Http\Livewire\Aspirasi;

use App\Models\Aspirasi;
use Livewire\Component;
use Livewire\WithPagination;

class GuestHistoryAspirasi extends Component
{
    public function mount(){
    }

    use WithPagination;

    public function render()
    {
        return view('livewire.guest-history-aspirasi', [
            'aspirasi' => Aspirasi::orderByDesc('id')->paginate(5),

        ]);
    }

    public function rate($id, $rate)
    {
        $tiket = Aspirasi::where('id', $id)->first();
        $tiket->rate = $rate;
        $tiket->save();
        return redirect(request()->header('Referer'));
    }

    public function attachment($id){
        $this->emit('openModal', 'view-attachment', [
            'aspirasi_id' => $id
        ]);
    }
}
