<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\RegisterWithEmailRequest;
use App\Services\AuthService;

class AuthController extends Controller
{
    protected $auth;

    public function __construct(AuthService $auth)
    {
        $this->auth = $auth;
    }

    public function registerWithEmail(RegisterWithEmailRequest $request)
    {
        return $this->auth->registerWithEmail($request->all());
    }
}
