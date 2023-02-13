<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Receta;
use Illuminate\Auth\Access\HandlesAuthorization;

class RecetaPolicy
{
    use HandlesAuthorization;

    public function author(User $user, Receta $recetum){
        
        if($user->id == $recetum->users_id){
            return true;
        }else{
            return false;
        }
    }
}
