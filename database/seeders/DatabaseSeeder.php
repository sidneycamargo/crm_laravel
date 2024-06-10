<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(MaritalStatusSeeder::class);
        $this->call(SellersTableSeeder::class);
        $this->call(LoadSourcesSeeder::class);
        $this->call(OrganizationsFieldsSeeder::class);
        $this->call(OrganizationsSeeder::class);
        
    }
}
