<?php

namespace App\Http\Controllers\User;

use App\Application\User\Register;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class RegisterController
{
    public function __construct(
        private Register $register
    ) {}

    public function show(): View
    {
        return view('user.register');
    }

    public function execute(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $this->register->execute(
            $data['name'],
            $data['email'],
            $data['password']
        );

        return redirect()->route('login.show');
    }
}
