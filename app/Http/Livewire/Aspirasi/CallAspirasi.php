<?php

namespace App\Http\Livewire\Aspirasi;

use App\Models\Aspirasi;
use Livewire\Component;
use Livewire\WithPagination;

class CallAspirasi extends Component
{

    use WithPagination;

    public $sortBy = 'latest';
    public $attachment;
    protected $queryString = ['sortBy'];
    protected $listeners = [
        'status-change' => '$refresh'
    ];

    public function mount(){

    }

    public function render()
    {
        $aspirasi = new Aspirasi();

        switch ($this->sortBy){
            case 'latest':
                $aspirasi = $aspirasi->orderBy('id', 'desc');
            break;
            default:
                $aspirasi = $aspirasi->orderBy('id','asc');
        }

        return view('livewire.call-aspirasi', [
            'aspirasi' => $aspirasi->paginate(5),
        ]);
    }

    public function pick($id){
        $this->emit('openModal', 'confirm-pick-aspirasi', [
            'aspirasi_id' => $id
        ]);
    }

    public function resolve($id){
        $this->emit('openModal', 'confirm-resolve-aspirasi', [
            'aspirasi_id' => $id
        ]);
    }

    public function delete($id){
        $this->emit('openModal', 'confirm-delete-aspirasi', [
           'aspirasi_id' => $id
        ]);
    }

    public function attachment($id){
        $this->emit('openModal', 'view-attachment', [
            'aspirasi_id' => $id,
        ]);
    }
}
