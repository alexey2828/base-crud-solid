<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\UserRepositoryInterface;

class UserController extends BaseApiController
{
    public array $validationRules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email',
        'password' => 'required|string|min:8',
        'role' => 'nullable|string|max:255',
        'login' => 'nullable|string|max:255|unique:users,login',
        'phone' => 'nullable|string|max:255',
        'verification_code' => 'nullable|string|max:255',
        'verification_expires' => 'nullable|date',
    ];

    public function __construct(UserRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
