<?php

namespace Database\Seeders;

use App\Models\Ceo;
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
        Ceo::factory(10)->create();
    }
}
