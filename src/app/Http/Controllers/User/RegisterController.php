<?php

namespace App\Http\Controllers\User;

use App\Application\User\RegisterUser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RegisterController
{
    public function __construct(
        private RegisterUser $registerUser
    ) {}

    public function __invoke(Request $request): JsonResponse
    {
        $this->registerUser->execute(
            $request->input('name'),
            $request->input('email'),
            $request->input('password')
        );

        return response()->json(['message' => 'User created', 'success' => true], 201);
    }
}
