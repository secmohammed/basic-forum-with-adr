<?php

namespace App\Users\Domain\Repositories;

use App\App\Domain\Repositories\Repository;
use App\Users\Domain\Models\User;

/**
 * User Repository Class
 */
class UserRepository extends Repository {
	protected $model;
	public function __construct(User $user) {
		$this->model = $user;
	}
}
