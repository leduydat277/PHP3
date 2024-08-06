<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShoeController;
use Illuminate\Support\Facades\Auth;
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
*/
Route::middleware(['auth', 'active'])->group(function () {
    Route::resource('shoes', ShoeController::class);
    Route::get('shoes/details/{id}', [ShoeController::class, 'show'])->name('shoes.show');
    Route::get('shoes/prdcate/{id}', [ShoeController::class, 'prdcate'])->name('shoes.prdcate');
    Route::get('/search', [ShoeController::class, 'search'])->name('products.search');
});
Route::middleware(['auth', 'admin', 'active'])->group(function () {
    Route::get('/admin/users', [AdminController::class, 'index'])->name('admin');
    Route::post('/admin/users/{user}/toggle-active', [AdminController::class, 'toggleActive']);
    Route::get('shoes/listprd/list', [ShoeController::class, 'listprd'])->name('shoes.listprd');
    Route::get('shoes/admin/add', [ShoeController::class, 'create'])->name('shoes.create');
    Route::get('shoes/admin/list', [ShoeController::class, 'index1'])->name('shoes.index1');
    Route::get('/admin', [AdminController::class, 'show'])->name('admin1');
    Route::get('admin/addUser', [AdminController::class, 'addUser'])->name('addUser');
    Route::post('admin/addUser', [AdminController::class, 'createUser'])->name('admin.store');
    Route::get('admin/edit/{id}', [AdminController::class, 'editUser'])->name('editUser');
    Route::put('admin/update/{id}', [AdminController::class, 'updateUser'])->name('admin.update');
    Route::put('/change-password', [AdminController::class, 'changePassword'])->middleware('auth');
    Route::get('/change-password', [AdminController::class, 'showFormChangePassword'])->middleware('auth')->name('change-pass');
});

Auth::routes();