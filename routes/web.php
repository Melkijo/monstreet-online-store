<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrdersHistoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);


Route::group(['middleware' =>'guest'], function(){
    Route::get('/register', [AuthController::class, 'register'] )-> name('register');
    Route::post('/register', [AuthController::class, 'registerPost'] )-> name('register');
    
    Route::get('/login', [AuthController::class, 'login'] )-> name('login');
    Route::post('/login', [AuthController::class, 'loginPost'] )-> name('login');
    
});
Route::delete('/logout', [AuthController::class, 'logout'] )-> name('logout');

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('user/order-history', [OrdersHistoryController::class, 'index'])->name('order.history');

    Route::post('user/cart/checkout', [ProductController::class, 'checkout'])->name('cart.checkout');
    Route::get('user/profile', [UserController::class, 'profile'])->name('profile');
    Route::put('user/profile/{id}', [UserController::class, 'profileEdit'])->name('profile.edit');

    Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
    Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
    Route::delete('remove-from-cart/{id}', [ProductController::class, 'removeFromCart'])->name('remove.from.cart');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin', [UserController::class, 'admin'])->name('admin');
    Route::post('/admin',[ProductController::class, 'store'])-> name('admin.store');
    Route::get('/admin/products',[ProductController::class, 'showAdmin'])-> name('admin.products');
    Route::get('/admin/products/create',[ProductController::class, 'create'])-> name('admin.create');
    Route::delete('/admin/{product}', [ProductController::class, 'destroy'])->name('admin.destroy');
    Route::post('/admin/product/{product}', [ProductController::class, 'edit'])->name('admin.edit');
    Route::get('/admin/users', [UserController::class, 'users'])->name('admin.users');
    Route::delete('/admin/users/{id}', [UserController::class, 'userDestroy'])->name('admin.destroy.user');
    Route::get('/admin/orders-history',[ProductController::class, 'adminOrdersHistory'])-> name('admin.orders-history');
    
    Route::put('/admin/product/{product}', [ProductController::class, 'update'])->name('admin.update');
   
});


Route::get('/about',function(){
    return view('pages.about');
});


