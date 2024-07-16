<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\VendorCar;
use App\Models\User;

class VendorCarPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any VendorCar');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, VendorCar $vendorcar): bool
    {
        return $user->checkPermissionTo('view VendorCar');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create VendorCar');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, VendorCar $vendorcar): bool
    {
        return $user->checkPermissionTo('update VendorCar');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, VendorCar $vendorcar): bool
    {
        return $user->checkPermissionTo('delete VendorCar');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, VendorCar $vendorcar): bool
    {
        return $user->checkPermissionTo('restore VendorCar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, VendorCar $vendorcar): bool
    {
        return $user->checkPermissionTo('force-delete VendorCar');
    }
}
