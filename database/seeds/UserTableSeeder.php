<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(['name' => 'Sazzad','email' => 'sunibne.sazzad@gmail.com','password' => bcrypt('123456')]);
        $user->assignRole('admin');
    }
}
