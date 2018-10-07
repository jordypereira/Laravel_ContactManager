<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
        ]);

        DB::table('contacts')->insert([
            'name' => 'Test',
            'email' => 'Test@example.com',
            'notes' => 'test',
            'user_id' => 1
        ]);

        DB::table('contacts')->insert([
            'name' => 'Test2',
            'email' => 'Test2@example.com',
            'notes' => 'test',
            'user_id' => 1
        ]);

        DB::table('contacts')->insert([
            'name' => 'Test3',
            'email' => 'Test@example.com',
            'notes' => 'test3',
            'user_id' => 1
        ]);
    }
}
