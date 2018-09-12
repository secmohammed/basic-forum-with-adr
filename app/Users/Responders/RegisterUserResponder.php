<?php

namespace App\Users\Responders;

use App\App\Responders\Responder;
use App\App\Responders\ResponderInterface;
use App\Users\Domain\Collection\UserResource;

class RegisterUserResponder extends Responder implements ResponderInterface {
	public function respond() {
		if ($this->response->getStatus() !== 200) {
			return response()->json($this->response->getData(), $this->response->getStatus());
		}
		return new UserResource($this->response->getData());
		// return (new TopicResource($this->response->getData()))
		// 	->response()
		// 	->setStatusCode($this->response->getStatus());

	}
}
