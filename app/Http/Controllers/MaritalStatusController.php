<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Marital_status;
use Illuminate\Http\Request;

class MaritalStatusController extends Controller
{
    public function show()
    {

        $company = 1;

        $maritalStatus = Marital_Status::all();

        //dd($maritalStatus);

        return view('maritalStatus.maritalStatus_show', compact('maritalStatus'));
    }

    public function list()
    {
        $company = 1;

        $maritalStatus = Marital_status::find(2)->first();

        return $maritalStatus;
    }

    public function create()
    {

        $company = 1;

        return view('maritalStatus.maritalStatus_add');
    }

    public function edit($id)
    {

        $contact = Marital_status::find($id);

        return view('maritalStatus.maritalStatus_edit', compact('contact'));
    }

    public function store(Request $request)
    {
        $company_id = 1;

        // $maritalStatus = Contact::where('contact_id', 2)->first();
        //Marital_status::insert('insert into marital_status (company_id, name, itin) values (?, ?, ?)', [$company_id, 'Dayle', '111.111.111-11']);

        $maritalStatus = new Marital_status();

        $maritalStatus->masculine_name   = $request->male;
        $maritalStatus->female_name      = $request->female;

        $maritalStatus->company_id  = $company_id;


        $id = $maritalStatus->save();

        return $id;
    }

    public function maritalStatusUpdate(Request $request)
    {
        $company_id = 1;

        $maritalStatus = new Marital_status();

        $maritalStatus->name                 = $request->name;

        /**
        $maritalStatus->date                 = $request->date;
        $maritalStatus->title                = $request->title;
         */
        $maritalStatus->company_id           = $company_id;

        $maritalStatus->save();
    }

    public function maritalStatusDestroy(Request $request)
    {

        $company = 1;

        $id = $request->id;

        Marital_status::destroy($id);

        $request->session()
            ->flash(
                'mensagem',
                'Contato $id removido com sucesso'
            );

        return ($id);
    }
}
