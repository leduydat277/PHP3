<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Shoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShoeController extends Controller
{
    //// Hiển thị danh sách sách
    public function index()
    {
        $cate = Category::all();
        $shoes = Shoe::orderBy('id', 'desc')->Paginate(8);
        return view('shoes.home', compact('shoes', 'cate'));
    }
    public function index1()
    {
        $cate = Category::all();
        $shoes = Shoe::orderBy('id', 'desc')->Paginate(8);
        return view('shoes.index', compact('shoes', 'cate'));
    }

    // Hiển thị form thêm sách
    public function create()
    {
        $cate = Category::all();
        $categories = Category::all();
        return view('shoes.create', compact('categories', 'cate'));
    }

    // Lưu sách mới
    public function store(Request $request)
    {
        $cate = Category::all();
        $shoes = Shoe::all();
        $shoe = new Shoe($request->except('image'));

        if ($request->hasFile('image')) {
            $shoe->image = $request->file('image')->store('images', 'public');
        }
        $shoe->save();

        return redirect()->route('shoes.index1')->with('success', 'Thêm thành công');
    }

    // Hiển thị form chỉnh sửa sách
    public function edit(Shoe $shoe)
    {
        $cate = Category::all();

        $categories = Category::all();
        return view('shoes.edit', compact('shoe', 'categories', 'cate'));
    }
    public function show($id)
    {
        $cate = Category::all();
        $shoe = Shoe::findOrFail($id);
        return view('shoes.show', compact('shoe', 'cate'));
    }
    public function prdcate($id)
    {
        $cate = Category::all();
        $prdcate = Shoe::where('category_id', $id)->Paginate(8);
        return view('shoes.prdcate', compact('prdcate', 'cate'));
    }
    public function listprd()
    {
        $cate = Category::all();
        $shoes = Shoe::Paginate(8);
        return view('shoes.listprd', compact('shoes', 'cate'));
    }
    // Cập nhật sách
    public function update(Request $request, $id)
    {
        $shoe = Shoe::findOrFail($id);

        $shoe->fill($request->except('image'));
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($shoe->image) {
                Storage::disk('public')->delete($shoe->image);
            }
            $shoe->image = $request->file('image')->store('images', 'public');
        }

        $shoe->save();
        return redirect()->back()->with('success', 'Sửa thành công');
    }

    // Xóa sách
    public function destroy(Shoe $Shoe)
    {
        $Shoe->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }
    // controllers/product.php

    public function search(Request $request)
    {
        $query = $request->input('search');
        $shoes = Shoe::where('name', 'LIKE', "%$query%")
            ->paginate(5);
        $cate = Category::all();
        // dd($shoes);
        return view('shoes.listprd', compact('shoes','cate'));
    }
}
