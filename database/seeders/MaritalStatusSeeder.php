<?php

namespace Database\Seeders;

use App\Models\Tbl_marital_status_old;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $old_marital_status = Tbl_marital_status::all();

        foreach ($old_marital_status as $marital_status) {
            DB:table('tbl_marital_status')->insert([
                'id' => $marital_status->id,
                'masculine_name' => $marital_status->masculine_name,
                'female_name' => $marital_status->female_name,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'tbl_company_id' => 1,
            ]);
        }
    }
}
