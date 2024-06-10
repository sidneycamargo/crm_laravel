<?php

namespace Database\Seeders;

use App\Models\Tbl_organization_old;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class OrganizationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $old_organizations = Tbl_organization_old::all();

        foreach ($old_organizations as $organization) {
            DB::table('tbl_organizations')->insert([
                'id' => $organization->organization_id,
                'description' => $organization->organization_descr,
                'address' => $organization->organization_address,
                'city' => $organization->organization_city,
                'country' => $organization->organization_country,
                'tbl_company_id' => 1,
                'tbl_seller_id' => $organization->organization_owner,
                'tbl_organization_fields_id' => $organization->organization_fields_id,
            ]);
        }
    }
}
