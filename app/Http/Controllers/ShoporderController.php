<?php

namespace App\Http\Controllers;

use App\Models\Shoporder;
use Inertia\Inertia;
use Illuminate\Http\Request;

class ShoporderController extends Controller
{
    public function index()
    {
        $shoporders = Shoporder::with('user:id,name')
            ->orderBy('created_at', 'desc')
            ->get();
        return Inertia::render('Admin/Shoporder', [
            'shoporders' => $shoporders
        ]);
    }

    public function userShoporders()
    {
        $shoporders = Shoporder::with('user:id,name')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->get();
        return Inertia::render('User/Shoporder', [
            'shoporders' => $shoporders
        ]);
    }
}
