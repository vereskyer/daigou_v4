<?php

namespace App\Http\Controllers;

use App\Models\Siteorder;
use Inertia\Inertia;
use Illuminate\Http\Request;

class SiteorderController extends Controller
{
    public function userSiteorders()
    {
        $siteorders = Siteorder::with('user:id,name')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->get();
        return Inertia::render('User/Siteorder', [
            'siteorders' => $siteorders
        ]);
    }
}
