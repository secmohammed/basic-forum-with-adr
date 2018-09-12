<?php

namespace App\Forum\Responders;

use App\App\Responders\Responder;
use App\App\Responders\ResponderInterface;
use App\Forum\Domain\Resources\PostResource;

class StorePostResponder extends Responder implements ResponderInterface {
	public function respond() {
		return new PostResource($this->response->getData());
	}
}
