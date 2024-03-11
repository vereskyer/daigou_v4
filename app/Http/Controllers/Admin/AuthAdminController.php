<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthAdminController extends Controller
{
    public function showLoginForm()
    {
        return Inertia::render('Admin/showLogin');
    }

    public function login(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->email, 'password' => $request->password,
            'is_admin' => 1
        ])) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('home')->with('error', 'Invalid credentials');
    }
}
