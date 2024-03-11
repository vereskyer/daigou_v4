<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthAdminController extends Controller
{
    public function showLoginForm()
    {
        return Inertia::render('Admin/showLogin');
    }
}
