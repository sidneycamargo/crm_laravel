<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function contactsView()
    {

        $company = 1;

        $contacts = Contact::all();

        return view('contacts.contacts_view', compact('contacts'));
    }

    public function contactList()
    {
        $company = 1;

        $contacts = Contact::where('contact_id', 2)->first();

        return $contacts;
    }

    public function contactsAdd()
    {

        $company = 1;

        return view('contacts.contacts_add1');
    }

    public function contactsEdit($id)
    {

        $contact = Contact::find($id);

        return view('contacts.contacts_edit', compact('contact'));
    }

    public function store(Request $request)
    {
        $company_id = 1;

        // $contacts = Contact::where('contact_id', 2)->first();
        Contact::insert('insert into contacts (company_id, name, itin) values (?, ?, ?)', [$company_id, 'Dayle', '111.111.111-11']);

        return $request;
    }

    public function contactsUpdate(Request $request)
    {
        $company_id = 1;

        $contacts = new Contact();

        $contacts->name                 = $request->name;

        /**
        $contacts->date                 = $request->date;
        $contacts->title                = $request->title;
        $contacts->sex                  = $request->sex;
        $contacts->document_type        = $request->document_type;
        $contacts->document             = $request->document;
        $contacts->itin                 = $request->itin;
        $contacts->$contacts->email     = $request->email;
        $contacts->phone                = $request->phone;
        $contacts->zip                  = $request->zip;
        $contacts->street_name          = $request->street_name;
        $contacts->number               = $request->number;
        $contacts->complement           = $request->complement;
        $contacts->district             = $request->district;
        $contacts->city                 = $request->city;
        $contacts->state                = $request->state;
        $contacts->ddd                  = $request->ddd;
        $contacts->nationality          = $request->nationality;
        $contacts->occupation           = $request->occupation;
        $contacts->mkt_position         = $request->mkt_position;
        $contacts->birth_date           = $request->birth_date;
        $contacts->discount_fidelity        = $request->discount_fidelity;
        $contacts->discount_fidelity_type   = $request->discount_fidelity_type;

        $contacts->organization_id      = $request->organization_id;
        $contacts->marital_status_id    = $request->maritalstatus_id;
        $contacts->lead_source_id       = $request->lead_source_id;
         */
        $contacts->company_id           = $company_id;

        $contacts->save();
    }

    public function contactsDestroy(Request $request)
    {

        $company = 1;

        $id = $request->id;

        Contact::destroy($id);

        $request->session()
            ->flash(
                'mensagem',
                'Contato $id removido com sucesso'
            );

        return ($id);
    }
}
