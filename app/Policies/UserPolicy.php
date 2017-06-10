<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }
    public function edit(User $currentUser, User $user){
       return $currentUser->id === $user->id;
       //return true;
    }
    public function destroy(User $currentUser, User $user)
    {
        return $currentUser->is_admin && $currentUser->id !== $user->id;
    }
}
