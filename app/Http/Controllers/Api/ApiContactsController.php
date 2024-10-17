<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tbl_contact;
use Illuminate\Http\Request;

class ApiContactsController extends Controller
{
    public function contactsListAll()
    {

        $company = 1;

        $contacts = Tbl_contact::all();

        return $contacts;
    }

    public function contactList()
    {
        $company = 1;

        $contacts = Tbl_contact::where('contact_id', 2)->first();

        return $contacts;
    }

    public function contactsAdd()
    {
        echo "Contacts Add";
    }

    public function contactsEdit($id)
    {

        $contact = Tbl_contact::find($id);

        return view('admin.contacts.contacts_edit', compact('contact'));
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
