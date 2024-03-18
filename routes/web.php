<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Database\Factories\ShoporderFactory;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShoporderController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthAdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

// User routes
Route::middleware('auth', 'verified')->prefix('user')->group(function () {
    Route::get('/index', function () {
        return Inertia::render('User/Index');
    })->name('user.index');

    Route::get('/shoporders', [\App\Http\Controllers\ShoporderController::class, 'userShoporders'])
        ->name('user.shoporders');

    Route::post('/shoporders', [\App\Http\Controllers\ShoporderController::class, 'shoporderStore'])
        ->name('user.shoporders.store');

    Route::put('/shoporders/{id}', [\App\Http\Controllers\ShoporderController::class, 'shoporderUpdate'])
        ->name('user.shoporders.update');

    Route::delete('/shoporders/{id}', [\App\Http\Controllers\ShoporderController::class, 'shoporderDelete'])
        ->name('user.shoporders.delete');

    // siteorder routes
    Route::get('/siteorders', [\App\Http\Controllers\SiteorderController::class, 'userSiteorders'])
        ->name('user.siteorders');

    Route::post('/siteorders/store', [\App\Http\Controllers\SiteorderController::class, 'siteorderStore'])
        ->name('user.siteorders.store');

    Route::delete('/siteorders/image/{id}', [App\Http\Controllers\SiteorderController::class, 'deleteImage'])
        ->name('admin.products.image.delete');


    // end siteorder routes

});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// End user routes


// admin routes
Route::group(['prefix' => 'admin', 'middleware' => 'redirectAdmin'], function () {
    Route::get('/login', [AuthAdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AuthAdminController::class, 'login'])->name('admin.login.post');
    Route::post('/logout', [AuthAdminController::class, 'logout'])->name('logout');
});

Route::middleware('auth', 'admin')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/shoporders', [ShoporderController::class, 'index'])->name('admin.shoporders');
});

require __DIR__ . '/auth.php';
