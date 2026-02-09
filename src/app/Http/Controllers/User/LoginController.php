<?php

namespace App\Http\Controllers\User;

use App\Application\User\LoginUser;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class LoginController
{
    public function __construct(
        private LoginUser $loginUser
    ) {}

    public function show(): View
    {
        return view('auth.login');
    }

    public function execute(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $this->loginUser->execute(
            $data['email'],
            $data['password']
        );

        return redirect()->route('get-user');
    }
}
