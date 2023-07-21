<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            ServiceSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        User::insert([
            'name' => 'testing',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'), // admin
            'remember_token' => Str::random(10),
        ]);
    }
}
