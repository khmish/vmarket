<?php

namespace App\Console\Commands;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Console\Command;

class AssignRole extends Command
{
    protected $signature = 'permission:role {user} {role} {--F|force: run the command in any environment}';

    protected $description = 'Assign Role to user';

    public function handle(): int
    {
        if (!app()->environment('local') && !$this->option('force')) {
            $this->error('You can run this command on local only if you sure you want to run it add --force|-F');

            return self::FAILURE;
        }

        $user = User::find($this->argument('user'));

        if (!$user) {
            $this->error("User with ID: ." . $this->argument('user') . " not found");

            return self::FAILURE;
        }

        $role = Role::whereName($this->argument('role'))->first();

        if (!$role) {
            $this->error("Role with Name: ." . $this->argument('role') . " not found");

            return self::FAILURE;
        }

        $user->assignRole($role);

        $this->info("$role->name assigned to $user->name");

        return self::SUCCESS;
    }
}
