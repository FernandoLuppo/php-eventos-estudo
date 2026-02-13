<?php

namespace App\Http\Controllers\User;

use App\Application\User\GetOne;
use Illuminate\Contracts\View\View;

class GetOneController
{
    public function __construct(
        private GetOne $getOne
    ) {}

    public function show(string $uuid): View
    {
        $user = $this->getOne->execute($uuid);

        return view('user.get-one', ['user' => $user]);
    }
}
