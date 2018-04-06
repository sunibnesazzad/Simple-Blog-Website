<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleAndPermissionSeeder ::class);
        $this->call(UserTableSeeder ::class);
        $this->call(ProfileTableSeeder ::class);
       /* $this->call(AdminRoleSeeder ::class);*/
         $this->call(CategoryTableSeeder ::class);
    }
}
