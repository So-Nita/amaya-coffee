<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('demo');
// });

Route::get('/', [HomeController::class, 'home_view']) ->name('/');

Route::get('/siderBelow', [HomeController::class, 'sider_below_feature']) ->name('siderBelow');

Route::get('/regularPost', [HomeController::class, 'regular_post_siderbar'])->name('regularPost');

Route::get('/shop', [HomeController::class, 'shop_view'])->name('shop');

Route::get('/wholesale', [HomeController::class, 'wholesale_view'])->name('wholesale');

Route::post('/addToCart', [CartController::class, 'addToCart'])->name('addToCart');

Route::post('/removeFromCart', [CartController::class, 'removeFromCart'])->name('removeFromCart');


// return view cart that Product that was in cart 
Route::get('/cart', [CartController::class, 'cart_view'])->name('cartView');

Route::get('/login', function () {
    return view('theme.sub_view.login'); // Replace 'auth.login' with the actual path to your login view
})->name('login');

Route::post('/login', [AuthController::class, 'login']);


Route::get('/register', function () {
    return view('theme.sub_view.register'); // Replace 'auth.register' with the actual path to your login view
})->name('register');



// Dashboard
Route::get('/dashboard', [HomeController::class, 'dashobard'])->name('dashboard');
Route::get('/dashboard/user', [HomeController::class, 'dashboard_userView'])->name('dashboardUser');
Route::get('/dashboard/product', [HomeController::class, 'dashboard_productView'])->name('dashboardProduct');
Route::get('/dashboard/category', [HomeController::class, 'dashboard_categoryView'])->name('dashboardCategory');