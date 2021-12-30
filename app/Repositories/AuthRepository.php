<?php

namespace App\Repositories;

use App\Models\User;

class AuthRepository
{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function create($data)
    {
        $user = $this->user;
        $user->firstname = $data['firstname'];
        $user->lastname = $data['lastname'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->save();

        return $user->fresh();
    }
}
