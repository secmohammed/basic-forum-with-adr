<?php

namespace App\Forum\Domain\Resources;

use App\Users\Domain\Collection\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource {
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function toArray($request) {
		return [
			'id' => $this->id,
			'body' => $this->body,
			'user' => new UserResource($this->user),
			'diffForHumans' => $this->created_at->diffForHumans(),
		];
	}
}
