<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tbl_company;
use App\Models\Tbl_company_old;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function companiesView() {

        $companies = Tbl_company::all();

        //var_dump($companies);

        // return var_dump($companies);
        return view('admin.companies.companies_view', compact('companies'));
        
    }

    public function companiesAdd() {

        $companies = Tbl_company::all();

        echo "Add Company";
        
    }

    public function convertCompaniesView() {


        $companies = Tbl_company_old::all();

        return view('admin.tools.convert.convert_companies_view', compact('companies'));
        
    }

    public function ConvertCompaniesExecute() {


        $companies = Tbl_company_old::all();
        $new_company = new Tbl_company();

        foreach ($companies as $company) {

            $new_company->id        = $company->company_id;
            $new_company->cnpj      = $company->cmpn_cnpj;
            $new_company->name      = $company->cmpn_name;
            $new_company->fantasy   = $company->cmpn_fantasy;
            $new_company->logomarca = $company->cmpn_logomarca;
            $new_company->created_at= $company->cmpn_created_at;
            $new_company->updated_at= $company->cmpn_updated_at;

            $new_company->save();

        }

        return view('admin.tools.convert.convert_companies_view', compact('companies'));
        
    }



}
