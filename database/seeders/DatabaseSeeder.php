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
        // \App\Models\User::factory()->create();
        // \App\Models\CompanyContactData::factory()->create();
        // \App\Models\SocialService::factory(6)->create();
        \App\Models\Settings::factory()->create();
    }
}
