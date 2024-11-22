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

    public function store(Request $request)
    {
        $company_id = 1;

        $maritalStatus = new Marital_status();

        $res = $maritalStatus->create([
            "company_id"            => $company_id,
            "masculine_name"        => $request->male,
            "female_name"           => $request->female,
        ]);

        $data = array(
            "id"      => $res->id,
            'mensagem' => 'Contato salvo com sucesso',
            'alert-type' => 'success'

        );

        var_dump($data);
        die();

        return view('maritalStatus.maritalStatus_add');
    }


    public function edit($id)
    {

        $contact = Marital_status::find($id);

        return view('maritalStatus.maritalStatus_edit', compact('contact'));
    }

    public function maritalStatusUpdate(Request $request)
    {
        $company_id = 1;

        $maritalStatus = new Marital_status();
    }

    public function Destroy(Request $request)
    {
        $company = 1;

        $id = $request->id;

        $ok = Marital_status::destroy($id);

        $data = array(
            'mensagem' => 'Contato $id removido com sucesso',
            'alert-type' => 'success'

        );

        return redirect()->route('marital_status.show')->with($data);
    }
}
