<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Paciente;
use Illuminate\Auth\Access\HandlesAuthorization;

class PacientePolicy
{
    use HandlesAuthorization;

    public function author(User $user, Paciente $paciente){
        
        if($user->id == $paciente->users_id){
            return true;
        }else{
            return false;
        }
    }
}