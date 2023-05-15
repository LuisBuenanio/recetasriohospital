<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Receta;

use Livewire\WithPagination;


class RecetaIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $recetas = Receta::where('users_id', auth()->user()->id)
                ->where(function ($query) {
                    $query->where('historia', 'LIKE', '%'.$this->search.'%')
                          ->orWhereHas('paciente', function ($query) {
                              $query->where('cedula', 'LIKE', '%'.$this->search.'%')
                                    ->orWhere('nombre', 'LIKE', '%'.$this->search.'%');
                          });
                })
                ->latest('id')
                ->paginate(10);
        /* $recetas = Receta::where('users_id', auth()->user()->id)
                ->where('historia', 'LIKE', '%'. $this->search . '%' )
                ->latest('id')
                ->paginate(10); */
        /* $recetas = Receta::latest('id')
        ->where('codigo', 'LIKE', '%'. $this->search . '%' )
        ->paginate(10); */
        return view('livewire.admin.receta-index', compact('recetas'));
    }
}
