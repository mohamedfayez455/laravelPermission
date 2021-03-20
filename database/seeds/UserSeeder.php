<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
           'name' =>'mohamed',
           'email' =>'admin@admin.com',
           'password'=>bcrypt('123456'),
        ]);
        $user->attachRole('super_admin');
    }
}
