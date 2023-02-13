<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Alergia;

use Livewire\WithPagination;

class AlergiaIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $alergias = Alergia::latest('id')
        ->where('nombre', 'LIKE', '%'. $this->search . '%' )
        ->paginate(10);
        return view('livewire.admin.alergia-index', compact('alergias'));
    }
}
