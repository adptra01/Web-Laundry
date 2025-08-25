<?php

namespace Database\Seeders;

use App\Models\Transaction;
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
        $this->call([
            CategorySeeder::class,
            ServiceSeeder::class,
        ]);

        User::create([
            'name' => 'testing',
            'email' => 'admin@testing.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // admin
        ]);

        Transaction::factory(10)->create();
    }
}
