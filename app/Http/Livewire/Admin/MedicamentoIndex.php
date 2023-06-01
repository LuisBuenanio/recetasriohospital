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
        
        /* $medicamentos = Medicamento::where('users_id', auth()->user()->id) */
        /* $medicamentos = Medicamento::latest('id')
        ->where('nombre', 'LIKE', '%'. $this->search . '%' ) */
        
        $medicamentos = Medicamento::where(function ($query) {
            $query->where('nombre', 'LIKE', '%' . $this->search . '%')
                  ->orWhere('concentracion', 'LIKE', '%' . $this->search . '%')
                  ->orWhere('tipo', 'LIKE', '%' . $this->search . '%');
        })
        ->paginate(10);
        return view('livewire.admin.medicamento-index', compact('medicamentos'));
    }
}
