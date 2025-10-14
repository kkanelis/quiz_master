<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function destroy() {
        Auth::logout();
        return redirect("/");
    }

    public function create(Request $request) {
        return view("auth.login");
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "username" => ['required'],
            "password" => ["required"]
        ]);

        if (!Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                "username" => "Invalid username or password"
              ]);
        }

        $request->session()->regenerate();

        return redirect("/");
    }
}
