<?php

namespace App\Services;

use App\Repositories\AuthRepository;

class AuthService
{
    protected $auth;

    public function __construct(AuthRepository $auth)
    {
        $this->auth = $auth;
    }

    public function registerWithEmail($data)
    {
        return $this->auth->create($data);
    }
}
