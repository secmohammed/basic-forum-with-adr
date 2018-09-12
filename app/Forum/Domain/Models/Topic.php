<?php

namespace App\Forum\Domain\Models;

use App\Users\Domain\Models\User;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model {
	protected $fillable = ['title', 'slug', 'body', 'section_id', 'user_id'];
	public function user() {
		return $this->belongsTo(User::class);
	}
	public function section() {
		return $this->belongsTo(Section::class);
	}
	public function posts() {
		return $this->hasMany(Post::class);
	}
	public function scopeLatestFirst($query) {
		return $query->orderBy('created_at', 'desc');
	}
}
