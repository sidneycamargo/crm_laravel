<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Entity;
use Dotenv\Parser\Entry;
use Illuminate\Http\Request;

class entitiesController extends Controller
{
    public function entitiesView()
    {

        $company = 1;

        $entities = Entity::all();

        return view('entities.entities_view', compact('entities'));
    }

    public function getAjaxTableShow()
    {
        $company = 1;

        $entity = Entity::all();

        $data = [];

        foreach ($entity as $item) {
            $value = $item->itin;

            $cpfPatern = preg_replace('/\D/', '', $value); // remove qq coisa q não seja numero
            // verificar se é cpf (11) ou se é CNPJ (14)
            if (strlen($cpfPatern) > 11) {
                $cpfPatern = preg_replace('/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/', "$1.$2.$3/$4-$5", $cpfPatern);
                //$cpfPatern = 'é cnpj';
            } else {
                $cpfPatern = preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', "$1.$2.$3-$4", $cpfPatern);
            }

            $phone = $item->phone;
            $phonePatern = preg_replace('/\D/', '', $phone);
            if (strlen($phone) > 10) {
                $phonePatern = preg_replace('/(\d{2})(\d)(\d{4})(\d{4})/', "($1) $2 $3-$4", $phonePatern);
            } else {
                $phonePatern = preg_replace('/(\d{2})(\d{4})(\d{4})/', "($1) $2-$3", $phonePatern);
            }


            $operator =
                "<td class='d-flex'>
                    <a href='" . route('marital_status.edit', $item->id) . "' 
                        class='btn btn-warning rounded-pill waves-effect waves-light lni lni-pencil-alt'>Edit</a>
                    <a href='#confirmDelete(" . $item->id . ")' class='btn btn-danger rounded-pill waves-effect waves-light lni lni-trash'>Delete</a>
                </td>";
            $data[] = [
                $operator,
                $item->name,
                $item->phone
            ];
        }

        $res = [
            'data' => $data
        ];

        return $res;
    }


    public function EntityList()
    {
        $company = 1;

        $entities = Entity::where('Entity_id', 2)->first();

        return $entities;
    }

    public function entitiesAdd()
    {

        $company = 1;

        return view('entities.entities_add');
    }

    public function entitiesEdit($id)
    {

        $entity = Entity::find($id);

        return view('entities.entities_edit', compact('entity'));
    }

    public function store(Request $request)
    {
        $company_id = 1;

        // $entities = Entity::where('Entity_id', 2)->first();
        Entity::insert('insert into entities (company_id, name, itin) values (?, ?, ?)', [$company_id, 'Dayle', '111.111.111-11']);

        return $request;
    }

    public function entitiesUpdate(Request $request)
    {
        $company_id = 1;

        $entities = new Entity();

        $entities->name                 = $request->name;

        /**
        $entities->date                 = $request->date;
        $entities->title                = $request->title;
        $entities->sex                  = $request->sex;
        $entities->document_type        = $request->document_type;
        $entities->document             = $request->document;
        $entities->itin                 = $request->itin;
        $entities->$entities->email     = $request->email;
        $entities->phone                = $request->phone;
        $entities->zip                  = $request->zip;
        $entities->street_name          = $request->street_name;
        $entities->number               = $request->number;
        $entities->complement           = $request->complement;
        $entities->district             = $request->district;
        $entities->city                 = $request->city;
        $entities->state                = $request->state;
        $entities->ddd                  = $request->ddd;
        $entities->nationality          = $request->nationality;
        $entities->occupation           = $request->occupation;
        $entities->mkt_position         = $request->mkt_position;
        $entities->birth_date           = $request->birth_date;
        $entities->discount_fidelity        = $request->discount_fidelity;
        $entities->discount_fidelity_type   = $request->discount_fidelity_type;

        $entities->organization_id      = $request->organization_id;
        $entities->marital_status_id    = $request->maritalstatus_id;
        $entities->lead_source_id       = $request->lead_source_id;
         */
        $entities->company_id           = $company_id;

        $entities->save();
    }

    public function entitiesDestroy(Request $request)
    {

        $company = 1;

        $id = $request->id;

        Entity::destroy($id);

        $request->session()
            ->flash(
                'mensagem',
                'Contato $id removido com sucesso'
            );

        return ($id);
    }
}
