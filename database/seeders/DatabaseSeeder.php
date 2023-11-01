<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //DB::table('users')->delete();
 
        User::create(array('name' => 'Test User', 'email' => 'abc@gmail.com', 'gender' => 'Male', 'type' => '1', 'password' => bcrypt('abc123'), 'is_active' => '1', 'created_by' => '0'));
 
        $this->command->info('User table seeded!');
    }
}