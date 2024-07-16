<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\RefrigeratingType;
use App\Models\User;

class RefrigeratingTypePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any RefrigeratingType');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, RefrigeratingType $refrigeratingtype): bool
    {
        return $user->checkPermissionTo('view RefrigeratingType');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create RefrigeratingType');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, RefrigeratingType $refrigeratingtype): bool
    {
        return $user->checkPermissionTo('update RefrigeratingType');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, RefrigeratingType $refrigeratingtype): bool
    {
        return $user->checkPermissionTo('delete RefrigeratingType');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, RefrigeratingType $refrigeratingtype): bool
    {
        return $user->checkPermissionTo('restore RefrigeratingType');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, RefrigeratingType $refrigeratingtype): bool
    {
        return $user->checkPermissionTo('force-delete RefrigeratingType');
    }
}
