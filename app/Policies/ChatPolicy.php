<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class ChatPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the models chat.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function index(User $user)
    {
        
        //return Auth::user()->serviceHave()->where('id','=','9')->count()==1;
    }

    /**
     * Determine whether the user can view the models chat.
     *
     * @param  \App\User  $user
     * @param  \App\modelsChat  $modelsChat
     * @return mixed
     */
    public function indexCustomer(User $user)
    {
        //return Auth::user()->serviceHave()->where('id','=','15')->count()==1;
    }


    /**
     * Determine whether the user can update the models chat.
     *
     * @param  \App\User  $user
     * @param  \App\models\Chat  $modelsChat
     * @return mixed
     */
    public function update(User $user)
    {
        //
    }

    /**
     * Determine whether the user can delete the models chat.
     *
     * @param  \App\User  $user
     * @param  \App\models\Chat  $modelsChat
     * @return mixed
     */
    public function destroy(User $user)
    {
        //
        //return Auth::user()->serviceHave()->where('id','=','9')->count()==1;
    }

    /**
     * Determine whether the user can restore the models chat.
     *
     * @param  \App\User  $user
     * @param  \App\models\Chat  $modelsChat
     * @return mixed
     */
    public function restore(User $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the models chat.
     *
     * @param  \App\User  $user
     * @param  \App\modelsChat  $modelsChat
     * @return mixed
     */
    public function forceDelete(User $user)
    {
        //
    }
}
