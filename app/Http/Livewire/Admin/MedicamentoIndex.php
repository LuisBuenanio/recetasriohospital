<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Medicamento;

use Livewire\WithPagination;

class MedicamentoIndex extends Component
{
    
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        
        
        $medicamentos = Medicamento::where(function ($query) {
            $query->where('nombre', 'LIKE', '%' . $this->search . '%')
                  ->orWhere('comercial', 'LIKE', '%' . $this->search . '%')
                  ->orWhere('concentracion', 'LIKE', '%' . $this->search . '%');
        })
        ->orderBy('id', 'desc') // Ordenar por fecha de creación en orden descendente
        ->paginate(10);
        
        return view('livewire.admin.medicamento-index', compact('medicamentos'));
    }
}
