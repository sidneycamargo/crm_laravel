<?php

namespace Database\Seeders;

use App\Models\Tbl_seller_old;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $old_sellers = Tbl_seller_old::all();
        
    }
}
