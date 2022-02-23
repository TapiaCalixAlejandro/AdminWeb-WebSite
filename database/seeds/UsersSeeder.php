<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Maquina de fuego',
            'email' => 'tapiacalix@gmail.com',
            'password' => Hash::make('12341234')
        ]);
        User::create([
            'name' => 'Alejandro',
            'email' => 'alejandro@gmail.com',
            'password' => Hash::make('12341234')
        ]);
    }
}
