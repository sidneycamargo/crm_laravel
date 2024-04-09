<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ContractsController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin Group Middleware
Route::middleware(['auth', 'roles:admin'])->group( function() {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    
    Route::get('/admin/contacts/view', [ContactsController::class, 'ContactsView'])->name('admin.contacts.view');
    Route::delete('/admin/contacts/delete/{id}', [ContactsController::class, 'ContactsDestroy'])->name('admin.contacts.delete');
    Route::get('/admin/contacts/edit/{id}', [ContactsController::class, 'ContactsEdit'])->name('admin.contacts.edit');

    Route::get('/admin/contracts/view', [ContractsController::class, 'ContractsView'])->name('admin.contracts.view');
    
    

}); // End Middleware


Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::post('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
