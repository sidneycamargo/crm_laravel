<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Tbl_seller_old;
use Illuminate\Database\Seeder;


class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $old_sellers = Tbl_seller_old::all();
        $old_sellers = [
            'sellers_id' => 1,
            'sellers_company_id' => 1,
            'sellers_name' => "Nome",
            'sellers_login' => "login",
            'sellers_email'=> "Email",
        ];

        foreach ($old_sellers as $seller) {
            DB::table('tbl_sellers')->insert([
                'id' => $seller->sellers_id,
                'company_id' => $seller->sellers_company_id,
                'name' => $seller->sellers_name,
                'login' => $seller->sellers_login,
                'email' => $seller->sellers_email,
                'created_at' => $seller->created_at,
                'updated_at' => $seller->updated_at,
                'id' => 1,
                'company_id' => 1,
                'name' => 'Nome',
                'login' => 'Login',
                'email' => 'e-mail',
            ]);
        }
        
    }
}
