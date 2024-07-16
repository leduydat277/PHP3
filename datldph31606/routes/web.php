<?php
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    $highPriceBooks = DB::table('books')->join('categories', 'categories.id', '=', 'books.category_id')->orderBy('price', 'desc')->limit(8)->get();
    $lowPriceBooks = DB::table('books')->join('categories', 'categories.id', '=', 'books.category_id')->orderBy('price', 'asc')->limit(8)->get();

    return view('home', compact('highPriceBooks', 'lowPriceBooks'));
});
Route::get('/categories/{id}', function ($id) {
    $category = DB::table('categories')->where('id', $id)->first();
    $books = DB::table('books')->where('category_id', $id)->get();
    return view('category', compact('books','category'));
});
Route::get('/categories', function () {
    $category = DB::table('categories')->get();
    return view('categories', compact('category'));
});
Route::get('/books', function () {
    $books = DB::table('books')->join('categories', 'categories.id', '=', 'books.category_id')->get();

    return view('books', compact('books'));
});

Route::get('/books/{id}', function ($id) {
    $book = DB::table('books')->join('categories', 'categories.id', '=', 'books.category_id')->where('category_id', $id)->first();
    return view('book', compact('book'));
});

