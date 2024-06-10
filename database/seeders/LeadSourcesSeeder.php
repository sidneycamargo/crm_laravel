<?php

namespace Database\Seeders;

use App\Models\Tbl_lead_source_old;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class LeadSourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $old_lead_sources = Tbl_lead_source_old::all();

        foreach ($old_lead_sources  as $lead_source) {
            DB::table('tbl_lead_sources')->insert([
                'id' => $lead_source->lead_source_id,
                'description' => $lead_source->lead_source_descr,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'tbl_company_id' => 1,
            ]);
        }
    }
}
