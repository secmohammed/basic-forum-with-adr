<?php

namespace App\Forum\Actions;

use App\Forum\Domain\Services\IndexPostService;
use App\Forum\Responders\IndexPostResponder;

class IndexPostAction {
    public function __construct(IndexPostResponder $responder, IndexPostService $services) {
        $this->responder = $responder;
        $this->services = $services;
    }
    public function __invoke() {
        return $this->responder->withResponse(
            $this->services->handle()
        )->respond();
    }
}