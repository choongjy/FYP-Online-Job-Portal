<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //  \App\Models\User::factory(20)->create();
        //  \App\Models\Company::factory(20)->create();
         \App\Models\Job::factory(20)->create();
        // $admin = \App\Models\User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@example.com',
        //     'password' => bcrypt('password'),
        //     'email_verified_at'=> now(),
        // ]);

        // $adminRole = \App\Models\Role::create([
        //     'name' => 'admin'
        // ]);

        // $admin->roles()->attach($adminRole);

        // $this->call([
        //     CategorySeeder::class,

        // ]);
    }
}
