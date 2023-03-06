<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Subgruposcie10;

use Livewire\WithPagination;


class Subgruposcie10Index extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

       
    public function render()
    {
        $subgruposcie10s = Subgruposcie10::latest('id')
        ->where('clave', 'LIKE', '%'. $this->search . '%' )
        ->orWhere('descripcion', 'LIKE', '%'. $this->search . '%' )
        ->paginate(10);
        return view('livewire.admin.subgruposcie10-index', compact('subgruposcie10s'));
    }   
}
