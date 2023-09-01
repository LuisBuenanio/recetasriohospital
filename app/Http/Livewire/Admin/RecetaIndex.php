<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Receta;

use Livewire\WithPagination;

use Illuminate\Support\Facades\Auth;


class RecetaIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    /* public function render()
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
       
        return view('livewire.admin.receta-index', compact('recetas'));
    } */
    public function render()
    {
        $user = Auth::user();

        $recetas = Receta::where(function ($query) use ($user) {
            if ($user->hasRole('Admin')) {
                $query->where('historia', 'LIKE', '%'.$this->search.'%')
                      ->orWhereHas('paciente', function ($query) {
                          $query->where('cedula', 'LIKE', '%'.$this->search.'%')
                                ->orWhere('nombre', 'LIKE', '%'.$this->search.'%');
                      })
                      ->orWhereHas('diagnosticoscie10', function ($query) {
                        $query->where('clave', 'LIKE', '%'.$this->search.'%')
                        ->orWhere('descripcion', 'LIKE', '%'.$this->search.'%'); // Reemplaza 'nombre' con el nombre real del campo en la tabla 'diagnosticoscie10'
                    });;
            } else {
                $query->where('users_id', $user->id)
                      ->where(function ($query) {
                          $query->where('historia', 'LIKE', '%'.$this->search.'%')
                                ->orWhereHas('paciente', function ($query) {
                                    $query->where('cedula', 'LIKE', '%'.$this->search.'%')
                                          ->orWhere('nombre', 'LIKE', '%'.$this->search.'%');
                                })
                                ->orWhereHas('diagnosticoscie10', function ($query) {
                                    $query->where('clave', 'LIKE', '%'.$this->search.'%')
                                    ->orWhere('descripcion', 'LIKE', '%'.$this->search.'%'); // Reemplaza 'nombre' con el nombre real del campo en la tabla 'diagnosticoscie10'
                                });
                      });
            }
        })
        ->latest('id')
        ->paginate(10);

        return view('livewire.admin.receta-index', ['recetas' => $recetas]);
    }
}
