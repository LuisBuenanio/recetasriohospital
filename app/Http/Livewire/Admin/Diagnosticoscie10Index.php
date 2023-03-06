<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Diagnosticoscie10;

use Livewire\WithPagination;

class Diagnosticoscie10Index extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

       
    public function render()
    {
        $diagnosticoscie10s = Diagnosticoscie10::latest('id')
        ->where('clave', 'LIKE', '%'. $this->search . '%' )
        ->orWhere('descripcion', 'LIKE', '%'. $this->search . '%' )
        ->paginate(10);
        return view('livewire.admin.diagnosticoscie10-index', compact('diagnosticoscie10s'));
    }  
}
