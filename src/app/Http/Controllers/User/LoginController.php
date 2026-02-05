<?php

namespace App\Http\Controllers\User;

use App\Application\User\LoginUser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LoginController
{
    public function __construct(
        private LoginUser $loginUser
    ) {}

    public function __invoke(Request $request): JsonResponse
    {
        $user = $this->loginUser->execute(
            $request->input('email'),
            $request->input('password')
        );

        return response()->json([
            'message' => 'Logged with success',
            'success' => true
        ], 200);
    }
}
