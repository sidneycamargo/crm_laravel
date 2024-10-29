<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tbl_contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function contactsView()
    {

        $company = 1;

        $contacts = Tbl_contact::all();

        return view('contacts.contacts_view', compact('contacts'));
    }

    public function contactList()
    {
        $company = 1;

        $contacts = Tbl_contact::where('contact_id', 2)->first();

        return $contacts;
    }

    public function contactsAdd()
    {

        $company = 1;

        return view('contacts.contacts_add1');
    }

    public function contactsEdit($id)
    {

        $contact = Tbl_contact::find($id);

        return view('contacts.contacts_edit', compact('contact'));
    }

    public function store(Request $request)
    {
        $company = 1;

        // $contacts = Tbl_contact::where('contact_id', 2)->first();

        return $request;
    }

    public function contactsDestroy(Request $request)
    {

        $company = 1;

        $id = $request->id;

        Tbl_contact::destroy($id);

        $request->session()
            ->flash(
                'mensagem',
                'Contato $id removido com sucesso'
            );

        return ($id);
    }
}
