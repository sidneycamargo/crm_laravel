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

    public function getAjaxTableShow()
    {
        $company = 1;

        $maritalStatus = Marital_Status::all();

        $data = [];

        foreach ($maritalStatus as $item) {
            $operator =
                "<td class='d-flex'>
                    <a href='" . route('marital_status.edit', $item->id) . "' 
                        class='btn btn-warning waves-effect waves-light lni lni-pencil-alt'></a>
                    <a href='#' onclick=confirmDelete($item->id) class='btn btn-danger waves-effect waves-light lni lni-trash'></a>
                </td>";
            $data[] = [
                $item->masculine_name,
                $item->female_name,
                $operator,
            ];
        }

        $res = [
            'data' => $data
        ];

        return $res;
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

    private function validateMaritalStatus(Request $request)
    {
        $validateData = $request->validate(
            [
                'male' => 'required|max:40',
                'female' => 'required|max:40'
            ],
            [
                'male.required' => 'This Male Name is required',
                'female.required' => 'This Female Name is required'
            ]
        );
    }

    public function store(Request $request)
    {
        $this->validateMaritalStatus($request);

        $company_id = 1;

        $maritalStatus = new Marital_status();

        $res = $maritalStatus->create([
            "company_id"            => $company_id,
            "masculine_name"        => $request->male,
            "female_name"           => $request->female,
        ]);

        $data = array(
            'message' => 'Contato salvo com sucesso',
            'alert-type' => 'success',
            'id'      => $res->id

        );

        //
        return redirect()->route('marital_status.show')->with($data);
    }


    public function edit($id)
    {

        $maritalStatus = Marital_status::findOrFail($id);

        return view('maritalStatus.maritalStatus_edit', compact('maritalStatus'));
    }

    public function update(Request $request)
    {

        $this->validateMaritalStatus($request);

        $company_id = 1;

        $id = $request->id;

        Marital_status::findOrFail($id)->update([
            "masculine_name"        => $request->male,
            "female_name"           => $request->female,
        ]);

        $data = array(
            'message' => 'Contato salvo com sucesso',
            'alert-type' => 'success'
        );
        return redirect()->route('marital_status.show')->with($data);
    } // End Method

    public function Destroy($id)
    {
        $company = 1;

        $ok = Marital_status::destroy($id);

        $data = array(
            'message' => "Contato $id removido com sucesso",
            'alert-type' => 'success'

        );

        // return ("Entrou no Destroy com id -> " . $id);

        // return redirect()->back()->with($data);
    }
}
