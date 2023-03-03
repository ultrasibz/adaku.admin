<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::create([
             'firstname' => 'Gilbert',
             'lastname' => 'Sibajene',
             'email' => 'gilbertsibajene7@gmail.com',
             'password' => Hash::make('Welcome1')
         ]);
    }
}
