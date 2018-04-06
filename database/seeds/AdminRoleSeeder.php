<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use Spatie\Permission\Models\Permission;

class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
       $user = User::where('id'== 1);
        $user->assignRole('admin');
    }
}
