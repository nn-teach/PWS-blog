<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(2)->create();
        // \App\Models\Project::factory(10)->create();
        $users = \App\Models\User::factory(2)->has(\App\Models\Project::factory()->count(5))->create();
    }
}
