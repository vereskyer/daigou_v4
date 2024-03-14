<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class ShoporderController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Shoporder');
    }
}
