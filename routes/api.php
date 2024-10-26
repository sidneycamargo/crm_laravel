<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\ApiContactsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/contactlist', [ApiContactsController::class, 'ContactList'])->name('api.contact.list');

Route::get('admin/newtoken', [AdminController::class, 'newToken'])->name('api.admin.newToken');

Route::get('/contact/{id}', [ApiContactsController::class, 'get'])->name('api.contact.get')->middleware('api');
