<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Gruposcie10;

use Livewire\WithPagination;

class Gruposcie10Index extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $gruposcie10s = Gruposcie10::latest('id')
        ->where('clave', 'LIKE', '%'. $this->search . '%' )
        ->orWhere('descripcion', 'LIKE', '%'. $this->search . '%' )
        ->paginate(10);
        return view('livewire.admin.gruposcie10-index', compact('gruposcie10s'));  
    }
}
