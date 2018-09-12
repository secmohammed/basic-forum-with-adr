<?php

namespace App\Users\Domain\Models;

use App\Forum\Domain\Models\Post;
use App\Forum\Domain\Models\Topic;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'username', 'email', 'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];
	public function avatar($size = 45) {
		return 'http://www.gravatar.com/avatar/' . md5($this->email) . '?s=' . $size . '&d=mm';
	}
	public function topics() {
		return $this->hasMany(Topic::class);
	}
	public function posts() {
		return $this->hasMany(Post::class);
	}
}
