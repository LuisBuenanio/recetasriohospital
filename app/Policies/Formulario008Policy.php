<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Formulario008;
use Illuminate\Auth\Access\HandlesAuthorization;

class Formulario008Policy
{
    use HandlesAuthorization;

    public function author(User $user, Formulario008 $formulario008){
        
        if($user->id == $formulario008->users_id){
            return true;
        }else{
            return false;
        }
    }
}
