<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContractsController extends Controller
{
    /**
     * Destroy an authenticated session.
     */

     public function ContractsView() {

        return view('admin.contracts.contracts_view');
        
     }
}
