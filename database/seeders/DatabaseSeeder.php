<?php

namespace Database\Seeders;

use App\Models\Listings;
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
        // \App\Models\User::factory(6)->create();

        $user = User::factory()->create([
            'name' => 'John Snow',
            'email' => 'john@gmail.com'
        ]);


        Listings::create([
            'user_id' => $user->id,

        ]);
    }
}