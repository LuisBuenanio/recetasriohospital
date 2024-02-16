<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Paciente;

use Livewire\WithPagination;

class PacienteIndex extends Component
{
    use WithPagination;
    
    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        /* $pacientes = Paciente::where('users_id', auth()->user()->id)
                ->where('cedula', 'LIKE', '%'. $this->search . '%' )
                ->latest('id')
                ->paginate(10); */
        
        $pacientes = Paciente::latest('id')
            ->where(function($query) {
                $query->where('cedula', 'LIKE', '%'. $this->search . '%')
                    ->orWhere('nombre', 'LIKE', '%'. $this->search . '%');
            })
        ->paginate(8);
            
    return view('livewire.admin.paciente-index', compact('pacientes'));
    }
}
