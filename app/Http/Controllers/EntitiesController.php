<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Entity;
use Illuminate\Http\Request;

class entitiesController extends Controller
{
    public function entitiesView()
    {

        $company = 1;

        $entities = Entity::all();

        return view('entities.entities_view', compact('entities'));
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
