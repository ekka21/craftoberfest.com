<?php

use Illuminate\Database\Seeder;

class CreateFirstUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'     => 'admin',
            'email'    => 'admin@admin.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
    }
}
