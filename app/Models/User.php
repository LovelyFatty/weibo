<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable; // Notifiable是消息通知相关功能引用
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable; // Authenticatable是授权相关功能

class User extends Authenticatable {
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

    public function gravatar($size = '100')
    {
        $hash = md5(strtolower(trim($this->attributes['email']))); // 获取用户属性$this->attributes['xxx']
        return "http://www.gravatar.com/avatar/$hash?s=$size";
    }
}
