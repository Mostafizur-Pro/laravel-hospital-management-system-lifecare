<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [HomeController::class,'index'])->name('index');
// Route::get('/', [UserController::class,'index'])->name('index');
Route::get('/service', [HomeController::class,'service'])->name('service');
Route::get('/shop', [ProductController::class,'shop'])->name('shop');
Route::get('/doctors', [HomeController::class,'doctors'])->name('doctors');
Route::get('/departments', [HomeController::class,'departments'])->name('departments');
Route::get('/about', [HomeController::class,'about'])->name('about');






Route::get('/login', [UserController::class, 'login'])->Middleware('alreadyLoggedIn');
Route::post('/login-user',[UserController::class, 'loginUser'])->name('login-user');

Route::get('/register', [UserController::class, 'register'])->Middleware('alreadyLoggedIn');
Route::post('/register-user', [UserController::class, 'registerUser'])->name('register-user');

Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('isLoggedIn');

Route::get('/logout', [UserController::class, "logout"]);





Route::delete('/deleteUser/{id}', [UserController::class, 'deleteUser' ])->name('deleteUser');

Route::get('/analytics', function () {
    return view('dashboard/analytics');
});


// Display the edit profile page
Route::get('/edit-profile', [UserController::class, 'editProfile'])->name('editProfile');

// Update the user profile
Route::put('/update-profile', [UserController::class, 'updateProfile'])->name('updateProfile');



Route::get('/add-product', function () {
    return view('dashboard/addProduct');
});
// Route::get('/all-products', function () {
//     return view('dashboard/products/index');
// });

Route::post('/products', [ProductController::class, 'store'])->name('products');
Route::get('/all-products', [ProductController::class, 'index'])->name('all-products');

// Route::delete('/products/{product}', 'ProductController@destroy')->name('products.destroy');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');



Route::get('/products', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'showProductDetails'])->name('product.details');