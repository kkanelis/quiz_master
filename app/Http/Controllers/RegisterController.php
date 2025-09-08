<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create() {
        return view("auth.register");
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "username" => ["required", "min:3", "max:255"],
            "password" => ["required", Password::min(6)]
        ]);
        
        $user = User::create($validated);
        Auth::login($user);

        return redirect("/");

      }      
}
