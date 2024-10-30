<?php

namespace Database\Seeders;

use App\Models\Tbl_organization_old;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $old_organizations = Tbl_organization_old::all();

        foreach ($old_organizations as $organization) {
            DB::table('organizations')->insert([
                'id' => $organization->organization_id,
                'description' => $organization->organization_descr,
                'address' => $organization->organization_address,
                'city' => $organization->organization_city,
                'country' => $organization->organization_country,
                'company_id' => 1,
                'seller_id' => $organization->organization_owner,
                'organization_fields_id' => $organization->organization_fields_id,
            ]);
        }
    }
}
