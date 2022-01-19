<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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

        User::factory()
             ->create(['name' => 'fiston', 'email' => 'fis@gmail.com', 'password' => 'fis1234']);

             User::factory()
             ->create(['name' => 'chris', 'email' => 'chris@gmail.com', 'password' => 'chris1234']);

             User::factory()
             ->create(['name' => 'laeti', 'email' => 'laeti@gmail.com', 'password' => 'laeti1234']);
    }
}
