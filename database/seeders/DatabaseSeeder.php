<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@a.com',
        //     'password' => 'ganlanshu',
        //     'email_verified_at' => now(),
        //     'remember_token' => Str::random(10),
        //     'is_admin' => true
        // ]);
        // User::create([
        //     'name' => 'aaa',
        //     'email' => 'aaa@a.com',
        //     'password' => 'ganlanshu',
        //     'email_verified_at' => now(),
        //     'remember_token' => Str::random(10),
        //     'is_admin' => false
        // ]);

        \App\Models\Shoporder::factory(10)->create();
        \App\Models\Siteorder::factory(10)->create();
    }
}
