<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/', [ClientController::class, 'home']);
Route::get('/blog', [ClientController::class, 'blog']);
Route::get('/blog_show', [ClientController::class, 'show_blog']);
Route::get('/products', [ClientController::class, 'products']);
Route::get('/product_show', [ClientController::class, 'product_show']);
Route::get('/checkout', [ClientController::class, 'checkout']);


Route::get('/admin', [AdminController::class, 'admin']);
