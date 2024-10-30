<?php

namespace Database\Seeders;

use App\Models\Tbl_company_old;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $old_companys = Tbl_company_old::all();

        foreach ($old_companys as $company) {
            DB::table('companies')->insert(
                // Admin
                [
                    'id' => $company->company_id,
                    'cnpj' => $company->cmpn_cnpj,
                    'name' => $company->cmpn_name,
                    'fantasy' => $company->cmpn_fantasy,
                    'logomarca' => $company->cmpn_logomarca,
                    'created_at' => $company->created_at,
                    'updated_at' => $company->updated_at,
                ]
            );
        }
    }
}
