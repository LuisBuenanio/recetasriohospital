<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Categoriascie10;

use Livewire\WithPagination;

class Categoriascie10Index extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

       
    public function render()
    {
        $categoriascie10s = Categoriascie10::latest('id')
        ->where('clave', 'LIKE', '%'. $this->search . '%' )
        ->orWhere('descripcion', 'LIKE', '%'. $this->search . '%' )
        ->paginate(10);
        return view('livewire.admin.categoriascie10-index', compact('categoriascie10s'));
    }  
}
