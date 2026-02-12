<?php

namespace App\Http\Controller\User;

use App\Application\User\GetOne;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GetOneController
{
    public function __construct(
        private GetOne $getOne
    ) {}

    public function __invoke(Request $request): JsonResponse
    {
        $user = $this->getOne->execute(
            $request->input('uuid')
        );

        return response()->json([
            'message' => 'Get user infos with success.',
            'success' => true,
            'data' => $user,
        ], 200);
    }
}
