<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tbl_contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function contactsView() {

        $company = 1;

        $contacts = Tbl_contact::all();

        return view('admin.contacts.contacts_view', compact('contacts'));
        // return view('admin.contacts.contacts_view', compact($contacts));
    
    }

    public function contactsAdd() {
        echo "Contacts Add";
    }

    public function contactsEdit() {

        $company = 1;

        echo "Contacts Edit";
    }

    public function contactsDestroy(Request $request) {

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
