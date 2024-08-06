<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Shoe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users', ['users' => $users]);
    }
    public function showFormChangePassword(){
        return view('admin.changePass', ['user' => Auth::user()]);
    }
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('current_password','Mật khẩu cũ không chính xác');
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with('success', 'Cập nhật mật khẩu thành công');
    }
    public function show()
    {
        $shoe = Shoe::count();
        $cate = Category::count();
        $cate1 = Shoe::where('category_id', 1)->count();
        $cate2 = Shoe::where('category_id', 2)->count();
        $cate3 = Shoe::where('category_id', 3)->count();
        $cate4 = Shoe::where('category_id', 4)->count();

        $user = User::count();
        return view('admin.homeAdmin', compact('shoe', 'cate','user','cate1','cate2','cate3','cate4'));
    }

    public function toggleActive(User $user)
    {
        $user->active = !$user->active;
        $user->save();

        return redirect()->back()->with('success', 'Đổi trạng thái thành công');
    }
    public function addUser()
    {
        return view('admin.add');
    }
    public function createUser(Request $request)
    {
        $shoe = new User($request->except('avatar'));

        if ($request->hasFile('avatar')) {
            $shoe->avatar = $request->file('avatar')->store('avatars', 'public');
        }
        $shoe->save();

        return redirect()->route('admin')->with('success', 'Thêm thành công');
    }
    public function editUser($id)
    {
        $user = User::find($id);
        return view('admin.edit', compact('user'));
    }
    public function updateUser(Request $request, $id)
    {
        $shoe = User::findOrFail($id);

        $shoe->fill($request->except('avatar'));
        if ($request->hasFile('avatar')) {
            // Delete old avatar if exists
            if ($shoe->avatar) {
                Storage::disk('public')->delete($shoe->avatar);
            }
            $shoe->avatar = $request->file('avatar')->store('avatars', 'public');
        }

        $shoe->save();
        return redirect()->route('editUser', $id)->with('success','Cập nhật thành công');
    }
}
