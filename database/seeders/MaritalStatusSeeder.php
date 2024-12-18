<?php

namespace Database\Seeders;

use App\Models\Tbl_marital_status_old;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $old_marital_status = Tbl_marital_status_old::all();

        foreach ($old_marital_status as $marital_status) {
            DB::table('marital_status')->insert([
                'id' => $marital_status->marital_status_id,
                'masculine_name' => $marital_status->marital_status_masculine_name,
                'female_name' => $marital_status->marital_status_female_name,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'company_id' => 1,
            ]);
        }
    }
}
