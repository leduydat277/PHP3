<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    //// Hiển thị danh sách sách
    public function index()
    {
        $cate = Category::all();
        $shoes = Shoe::simplePaginate(8);
        return view('shoes.index', compact('shoes', 'cate'));
    }

    // Hiển thị form thêm sách
    public function create()
    {
        $cate = Category::all();
        $categories = Category::all();
        return view('shoes.create', compact('categories','cate'));
    }

    // Lưu sách mới
    public function store(Request $request)
    {
        $cate = Category::all();
        $shoes = Shoe::all();
        Shoe::create($request->all());
        return redirect()->route('shoes.index');

        // return view('shoes.index',compact('shoes','cate'));
    }

    // Hiển thị form chỉnh sửa sách
    public function edit(Shoe $shoe)
    {
        $cate = Category::all();

        $categories = Category::all();
        return view('shoes.edit', compact('shoe', 'categories','cate'));
    }
    public function show($id)
    {
        $cate = Category::all();
        $shoe = Shoe::findOrFail($id);
        return view('shoes.show', compact('shoe','cate'));
    }
    public function prdcate($id)
    {
        $cate = Category::all();
        $prdcate = Shoe::where('category_id', $id)->simplePaginate(8);
        return view('shoes.prdcate', compact('prdcate','cate'));
    }
    public function listprd(){
        $cate = Category::all();
        $shoe = Shoe::simplePaginate(8);
        return view('shoes.listprd', compact('shoe','cate'));
    }
    // Cập nhật sách
    public function update(Request $request, Shoe $shoe)
    {
        $shoe->update($request->all());
        return redirect()->route('shoes.index');
    }

    // Xóa sách
    public function destroy(Shoe $Shoe)
    {
        $Shoe->delete();
        return redirect()->route('shoes.index');
    }
    
}
