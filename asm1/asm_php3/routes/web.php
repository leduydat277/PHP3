<?php

use App\Http\Controllers\ShoeController;
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
Route::resource('shoes', ShoeController::class);
Route::get('shoes/details/{id}', [ShoeController::class, 'show'])->name('shoes.show');
Route::get('shoes/prdcate/{id}', [ShoeController::class, 'prdcate'])->name('shoes.prdcate');
Route::get('shoes/listprd', [ShoeController::class, 'listprd'])->name('shoes.listprd');
Route::get('shoes/admin/add', [ShoeController::class, 'create'])->name('shoes.create');
Route::get('shoes/admin/list', [ShoeController::class, 'index'])->name('shoes.index');






