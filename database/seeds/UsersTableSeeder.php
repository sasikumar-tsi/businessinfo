<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'admin@admin.com',
            'name' => 'Admin',
            'role' => 'admin',
            'password' => bcrypt('admin@123')
        ]);

        User::create([
            'email' => 'user@user.in',
            'name' => 'User',
            'role' => 'user',
            'password' => bcrypt('user@123')
        ]);

        User::create([
            'email' => 'adam@laraspace.in',
            'name' => 'Adam David',
            'role' => 'user',
            'password' => bcrypt('jesse@123')
        ]);
    }
}
