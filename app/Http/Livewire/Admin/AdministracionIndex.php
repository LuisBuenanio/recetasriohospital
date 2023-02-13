<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Administracion;

use Livewire\WithPagination;

class AdministracionIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $administraciones = Administracion::latest('id')
        ->where('dosis', 'LIKE', '%'. $this->search . '%' )
        ->paginate(10);
        return view('livewire.admin.administracion-index', compact('administraciones'));
    }
}
