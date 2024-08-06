<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    // Hiển thị danh sách sách
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // Hiển thị form thêm sách
    public function create()
    {
        $categories = Category::all();
        return view('books.create', compact('categories'))->with('massage','ok');
    }

    // Lưu sách mới
    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect()->route('books.index');
    }

    // Hiển thị form chỉnh sửa sách
    public function edit(Book $book)
    {
        $categories = Category::all();
        return view('books.edit', compact('book', 'categories'));
    }

    // Cập nhật sách
    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return redirect()->route('books.index');
    }

    // Xóa sách
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}

