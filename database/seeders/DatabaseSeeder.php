<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\address\Countries;
use App\Models\address\States;
use App\Models\address\Zones;
use App\Models\CustomerType;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        //Dummy User
            //User::create(array('name' => 'Test User', 'email' => 'abc@gmail.com', 'gender' => 'Male', 'type' => '1', 'password' => bcrypt('abc123'), 'is_active' => '1', 'created_by' => '0'));

        //Default Country
            Countries::create(array('name' => 'United Arab Emirates'));


        //Default State
            States::create(array('name' => 'Dubai', 'country_id' => '1'));


        //Default Zone
            Zones::create(array('name' => 'Al Barsha', 'state_id' => '1'));
            Zones::create(array('name' => 'Al Barsha First', 'state_id' => '1'));
            Zones::create(array('name' => 'Al Barsha Second', 'state_id' => '1'));


        //Customer Type
            CustomerType::create(array('name' => 'Pharmacy'));
            CustomerType::create(array('name' => 'Baqala'));

 
        $this->command->info('User table seeded!');
    }
}