<?php

namespace Database\Seeders;

use App\Models\Applications;
use App\Models\Bank;
use App\Models\Blog;
use App\Models\Cibil;
use App\Models\Payment;
use App\Models\Scheme;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory(10)->create();

        Bank::factory(10)->create();

        Scheme::factory(40)->create();

        Cibil::factory(20)->create();

        Applications::factory(30)->create();

        Payment::factory(20)->create();

        Blog::factory(30)->create();

    }
}
