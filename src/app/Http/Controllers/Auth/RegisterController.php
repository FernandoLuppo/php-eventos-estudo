<?php

namespace App\Http\Controllers\Auth;

use App\Application\Auth\RegisterUser;
use Illuminate\Http\Request;

class RegisterController
{
    public function __construct(
        private RegisterUser $registerUser
    ) {}

    public function __invoke(Request $request)
    {
        $this->registerUser->execute(
            $request->input('name'),
            $request->input('email'),
            $request->input('password')
        );

        return response()->json(['message' => 'User created'], 201);
    }
}
