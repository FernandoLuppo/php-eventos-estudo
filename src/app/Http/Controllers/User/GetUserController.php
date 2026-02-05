<?php

namespace App\Http\Controller\User;

use App\Application\User\GetUser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GetUserController
{
    public function __construct(
        GetUser $getUser
    ) {}

    public function __invoke(Request $request): JsonResponse
    {
        $user = $this->getUser->execute();

        return response()->json([
            'message' => 'Get user infos with success.',
            'success' => true,
            'data' => $user
        ], 200);
    }
}
