<?php

namespace App\Forum\Domain\Models;

use App\Users\Domain\Models\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
	protected $fillable = ['user_id', 'topic_id', 'body'];

	public function user() {
		return $this->belongsTo(User::class);
	}
	public function topic() {
		return $this->belongsTo(Topic::class);
	}
}
