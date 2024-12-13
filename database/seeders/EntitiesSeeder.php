<?php

namespace Database\Seeders;

use App\Models\Tbl_contact_old;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EntitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $old_contacts = Tbl_contact_old::all();

        foreach ($old_contacts as $contacts) {
            DB::table('entities')->insert([
                'id' => $contacts->contact_id,
                'name' => $contacts->contact_name,
                'title' => $contacts->contact_title,
                'email' => $contacts->contact_email,
                'phone' => $contacts->contact_phone,
                'zip' => $contacts->contact_zip,
                'street_name' => $contacts->contact_adress_street_name,
                'number' => $contacts->contact_address_number,
                'complement' => $contacts->contact_address_complement,
                'district' => $contacts->contact_address_district,
                'city' => $contacts->contact_address_city,
                'state' => $contacts->contact_address_state,
                'ddd' => $contacts->contact_address_ddd,
                'nationality' => $contacts->contact_nationality,
                'occupation' => $contacts->contact_occupation,

                'sex' => ($contacts->contact_sex = 'M') ? 'Masculin' : 'Feminin',

                'document_type' => 'RG/ID',
                'document' => $contacts->contact_document,
                'itin' => $contacts->contact_document_itin,
                'mkt_position' => $contacts->contact_mkt_position,
                'birth_date' => $contacts->contact_birth_date,

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

                'company_id' => $contacts->contact_companys_id,
                'marital_status_id' => $contacts->contact_marital_status_id,
                'organization_id' => $contacts->contact_organizations_id,
                'lead_source_id' => $contacts->contact_lead_source_id,
            ]);
        }
    }
}
