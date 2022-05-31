<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name'     => 'Sidy Guedes',
            'email'    => 'sidgley_guedes@hotmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
