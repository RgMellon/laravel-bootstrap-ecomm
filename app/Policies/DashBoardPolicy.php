<?php

namespace App\Policies;

use App\User;
use App\DashBoard;
use Illuminate\Auth\Access\HandlesAuthorization;

class DashBoardPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the  dash board.
     *
     * @param  \App\User  $user
     * @param  \App\DashBoard  $DashBoard
     * @return mixed
     */
    public function view(User $user)
    {
        return $user->id == 1;
    }

    /**
     * Determine whether the user can create  dash boards.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->id == 1;
    }

    /**
     * Determine whether the user can update the  dash board.
     *
     * @param  \App\User  $user
     * @param  \App\DashBoard  $DashBoard
     * @return mixed
     */
    public function update(User $user, DashBoard $DashBoard)
    {
        //
    }

    /**
     * Determine whether the user can delete the  dash board.
     *
     * @param  \App\User  $user
     * @param  \App\DashBoard  $DashBoard
     * @return mixed
     */
    public function delete(User $user, DashBoard $DashBoard)
    {
        //
    }
}
