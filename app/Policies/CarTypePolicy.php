<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\CarType;
use App\Models\User;

class CarTypePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any CarType');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, CarType $cartype): bool
    {
        return $user->checkPermissionTo('view CarType');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create CarType');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, CarType $cartype): bool
    {
        return $user->checkPermissionTo('update CarType');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CarType $cartype): bool
    {
        return $user->checkPermissionTo('delete CarType');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, CarType $cartype): bool
    {
        return $user->checkPermissionTo('restore CarType');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, CarType $cartype): bool
    {
        return $user->checkPermissionTo('force-delete CarType');
    }
}
