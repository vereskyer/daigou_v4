<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Siteorder;
use App\Models\SiteorderImage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SiteorderController extends Controller
{
    public function userSiteorders()
    {
        $siteorders = Siteorder::with('user:id,name', 'siteorder_images')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->get();
        return Inertia::render('User/Siteorder', [
            'siteorders' => $siteorders
        ]);
    }

    public function siteorderStore(Request $request)
    {
        // dd($request->file('siteorder_images'));
        $siteorder = new Siteorder();
        $siteorder->user_id = auth()->user()->id;
        $siteorder->name = $request->name;
        $siteorder->site = $request->site;
        $siteorder->description = $request->description;
        $siteorder->save();

        if ($request->hasFile('siteorder_images')) {
            $siteorderImages = $request->file('siteorder_images');
            foreach ($siteorderImages as $image) {
                // generate a unique name for the image using timestamp & random string
                $imageName = time() . '-' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                // store the image in the public folder with the unique name
                $image->move(public_path('siteorder_images'), $imageName);
                // create a new siteorder image record with the siteorder id & image name
                SiteorderImage::create([
                    'siteorder_id' => $siteorder->id,
                    'image' => 'siteorder_images/' . $imageName
                ]);
            }
        }
        redirect()->route('user.siteorders')->with('success', 'Siteorder created successfully');
    }

    public function deleteImage($id)
    {
        $image = SiteorderImage::find($id);
        $image->delete();
        return redirect()->back()->with('success', 'Image deleted successfully');
    }

    public function update(Request $request, $id)
    {
        $siteorder = Siteorder::findOrFail($id);
        $siteorder->name = $request->name;
        $siteorder->site = $request->site;
        $siteorder->description = $request->description;
        $siteorder->save();

        // if have images
        if ($request->hasFile('siteorder_images')) {
            $siteorderImages = $request->file('siteorder_images');
            foreach ($siteorderImages as $image) {
                // generate a unique name for the image using timestamp & random string
                $imageName = time() . '-' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                // store the image in the public folder with the unique name
                $image->move(public_path('siteorder_images'), $imageName);
                // create a new siteorder image record with the siteorder id & image name
                SiteorderImage::create([
                    'siteorder_id' => $siteorder->id,
                    'image' => 'siteorder_images/' . $imageName
                ]);
            }
        }
        return redirect()->route('user.siteorders')->with('success', 'Siteorder updated successfully');
    }

    public function siteorderDelete($id)
    {
        $siteorder = Siteorder::findOrFail($id);
        $siteorder->delete();
        return redirect()->back()->with('success', 'Product deleted successfully');
    }

    public function korean()
    {
        $users = auth()->user();
        return Inertia::render('User/Korean', [
            'users' => $users
        ]);
    }

    public function namecard()
    {
        $users = auth()->user();
        return Inertia::render('User/NameCard', [
            'users' => $users
        ]);
    }

}
