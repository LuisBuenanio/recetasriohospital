<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;


use App\Models\Formulario008;

use Livewire\WithPagination;

use Illuminate\Support\Facades\Auth;


class Formulario008Index extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }
    
    
    public function render()
    {
        $user = Auth::user();
        $formulario008s = Formulario008::where(function ($query) use ($user) {
            if ($user->hasRole('Admin')) {
                $query->where('codigo', 'LIKE', '%'.$this->search.'%')
                      ->orWhereHas('paciente', function ($query) {
                          $query->where('cedula', 'LIKE', '%'.$this->search.'%')
                                ->orWhere('apellido_paterno', 'LIKE', '%'.$this->search.'%')                                          
                                ->orWhere('apellido_materno', 'LIKE', '%'.$this->search.'%')
                                ->orWhere('nombre', 'LIKE', '%'.$this->search.'%') ;
                      });
            } else {
                $query->where('users_id', $user->id)
                      ->where(function ($query) {
                          $query->where('codigo', 'LIKE', '%'.$this->search.'%')
                                ->orWhereHas('paciente', function ($query) {
                                    $query->where('cedula', 'LIKE', '%'.$this->search.'%')
                                          ->orWhere('apellido_paterno', 'LIKE', '%'.$this->search.'%')                                          
                                          ->orWhere('apellido_materno', 'LIKE', '%'.$this->search.'%')                                          
                                          ->orWhere('nombre', 'LIKE', '%'.$this->search.'%');
                                });
                                
                      });
            }
        })
        ->latest('id')
        ->paginate(10);

        return view('livewire.admin.formulario008-index', ['formulario008s' => $formulario008s]);
    }
}


