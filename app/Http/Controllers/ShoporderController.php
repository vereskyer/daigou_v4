<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Shoporder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function shoporderStore(Request $request)
    {

        $shoporder = new Shoporder();
        $user_id = Auth::user()->id;
        $shoporder->user_id = $user_id; // 设置 user_id
        $shoporder->shop_name = $request->shop_name;
        $shoporder->building = $request->building;
        $shoporder->position = $request->position;
        $shoporder->phone = $request->phone;
        $shoporder->description = $request->description;
        $shoporder->save();

        return redirect()->route('user.shoporders')->with('success', 'Product created successfully.');
    }

    public function shoporderUpdate(Request $request, $id)
    {
        $shoporder = Shoporder::find($id);
        $shoporder->shop_name = $request->shop_name;
        $shoporder->building = $request->building;
        $shoporder->position = $request->position;
        $shoporder->phone = $request->phone;
        $shoporder->description = $request->description;
        $shoporder->save();
        return redirect()->route('user.shoporders')->with('success', 'Product created successfully.');
    }
}

