<?php

namespace App\Http\Controllers\Auth;

use App\Application\Auth\Login;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class LoginController
{
    public function __construct(
        private Login $login
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

        $user = $this->login->execute(
            $data['email'],
            $data['password']
        );

        return redirect()->route('get-user.show', ['uuid' => $user->getUuid()]);
    }
}
