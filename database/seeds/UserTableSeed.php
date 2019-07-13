<?php

use Illuminate\Database\Seeder;

class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Test Admin',
            'email' => 'badshah.hazor@gmail.com',
            'password' => Hash::make('password'),
            'role' => '1',
        ]);

        \App\User::create([
            'name' => 'Test User',
            'email' => 'hamidraza4722@gmail.com',
            'password' => Hash::make('password'),
            'role' => '2',
        ]);
    }
}
