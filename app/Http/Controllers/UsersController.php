<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller {
	//
	public function create()
    {
		return view('users.create');
	}

    public function show(User $user)
    {
        // 通过compact将$user转化为关联数组，作为第二个参数传递给view，将数据与视图绑定
        return view('users.show', compact('user'));
    }

    /*
        required 存在性验证
        min max 长度验证
        email 格式验证
        unique:users 唯一性验证(这里针对数据表users)
        confirmed 密码匹配验证

    */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);
        return;
    }
}
