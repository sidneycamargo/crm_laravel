<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\entitiesController;
use App\Http\Controllers\ContractsController;
use App\Http\Controllers\MaritalStatusController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
  Route::get('/', function () {
      return view('welcome');
  });
*/

Route::get('/', [AdminController::class, 'AdminLogin']);

Route::get('login', [AdminController::class, 'AdminLogin'])->name('login');
Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::post('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Admin Group Middleware
Route::middleware(['auth', 'roles:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');

    // MANAGER entities
    Route::delete('/entities/delete/{id}', [entitiesController::class, 'entitiesDestroy'])->name('entities.delete');


    // entities
    Route::get('/entities/view', [entitiesController::class, 'entitiesView'])->name('entities.view');
    Route::get('/entities/getAjaxTableShow', [entitiesController::class, 'getAjaxTableShow'])->name('entities.get_ajax_table_show');
    Route::get('/entities/edit/{id}', [entitiesController::class, 'entitiesEdit'])->name('entities.edit');
    Route::post('/entities/add', [entitiesController::class, 'entitiesAdd'])->name('entities.add');
    Route::post("entities/store", [entitiesController::class, 'Store'])->name('entities.store');

    // CONTRACTS
    Route::get('/admin/contracts/view', [ContractsController::class, 'ContractsView'])->name('admin.contracts.view');
    Route::post('/admin/contracts/add', [ContractsController::class, 'ContractsAdd'])->name('admin.contracts.add');

    // COMPANIES
    Route::get('/admin/companies/view', [CompaniesController::class, 'CompaniesView'])->name('admin.companies.view');
    Route::post('/admin/companies/add', [CompaniesController::class, 'CompaniesAdd'])->name('admin.companies.add');
    Route::get('/admin/companies/edit', [CompaniesController::class, 'CompaniesAdd'])->name('admin.companies.edit');
    Route::post('/admin/companies/delete', [CompaniesController::class, 'CompaniesAdd'])->name('admin.companies.delete');

    // CONVERT
    Route::get('/admin/convert/companies/view', [CompaniesController::class, 'ConvertCompaniesView'])->name('admin.convert.companies.view');
    Route::post('/admin/convert/companies/execute', [CompaniesController::class, 'ConvertCompaniesExecute'])->name('admin.convert.companies.execute');

    // MaritalStatus
    Route::get('/maritalstatus/view', [MaritalStatusController::class, 'Show'])->name('marital_status.show');
    Route::get('/maritalstatus/getAjaxTableShow', [MaritalStatusController::class, 'getAjaxTableShow'])->name('marital_status.get_ajax_table_show');
    Route::get('/maritalstatus/edit/{id}', [MaritalStatusController::class, 'Edit'])->name('marital_status.edit');
    Route::post('/maritalstatus/add', [MaritalStatusController::class, 'Create'])->name('marital_status.create');
    Route::post("maritalstatus/store", [MaritalStatusController::class, 'Store'])->name('marital_status.store');
    Route::post("maritalstatus/update", [MaritalStatusController::class, 'Update'])->name('marital_status.update');
    Route::post("maritalstatus/delete/{id}", [MaritalStatusController::class, 'Destroy'])->name('marital_status.delete');
}); // End Middleware
