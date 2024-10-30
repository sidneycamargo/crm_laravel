<?php

namespace Database\Seeders;

use App\Models\Tbl_organization_fields_old;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class OrganizationFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $old_organization_fields = Tbl_organization_fields_old::all();

        foreach ($old_organization_fields as $organization_field) {
            DB::table('organization_fields')->insert([
                'id' => $organization_field->organization_fields_id,
                'description' => $organization_field->organization_fields_descr,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'tbl_company_id' => 1,
            ]);
        }
    }
}
