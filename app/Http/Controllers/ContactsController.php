<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function contactsView() {

        $company = 1;

        $contacts = Contact::all();

        return view('admin.contacts.contacts_view', compact('contacts'));
        // return view('admin.contacts.contacts_view', compact($contacts));
    
    }

    public function contactsDestroy(Request $request) {

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
