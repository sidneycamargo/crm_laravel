<?php

namespace Database\Seeders;

use App\Models\Tbl_seller_old;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $old_sellers = Tbl_seller_old::all();

        foreach ($old_sellers as $seller) {
            DB::table('sellers')->insert([
                'id' => $seller->sellers_id,
                'name' => "'" . $seller->sellers_name . "'",
                'login' => "'" . $seller->login . "'",
                'email' => "'" . $seller->sellers_email . "'",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'company_id' => 1,
            ]);
        }
    }
}
