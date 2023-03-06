<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Medicamento;
use Illuminate\Auth\Access\HandlesAuthorization;

class MedicamentoPolicy
{
    use HandlesAuthorization;

    
    public function author(User $user, Medicamento $medicamento){
        
        if($user->id == $medicamento->users_id){
            return true;
        }else{
            return false;
        }
    }
}
