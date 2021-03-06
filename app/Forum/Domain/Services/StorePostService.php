<?php

namespace App\Forum\Domain\Services;

use App\App\Domain\Payloads\GenericPayload;
use App\App\Domain\Services\Service;
use App\Forum\Domain\Repositories\PostRepository;

class StorePostService extends Service {
	protected $posts;
	public function __construct(PostRepository $posts) {
		$this->posts = $posts;
	}
	public function handle($data = [], $topic = []) {

		return new GenericPayload($topic->posts()->create([
			'user_id' => auth()->id(),
			'body' => $data['body'],
		]));
	}
}