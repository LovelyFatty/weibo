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
}
