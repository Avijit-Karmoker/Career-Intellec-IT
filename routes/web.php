<?php

use App\Http\Controllers\{FrontendController, BrandController};
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [FrontendController::class, 'index'])->name('/');
Route::get('/regestration', [FrontendController::class, 'regestration'])->name('/regestration');
Route::post('/regestration_post', [FrontendController::class, 'regestration_post'])->name('regestration.post');
Route::get('/login', [FrontendController::class, 'login'])->name('/login');
Route::post('/login_post', [FrontendController::class, 'login_post'])->name('/login.post');
Route::get('/home', [FrontendController::class, 'home'])->name('/home');

Route::resource('/brand', BrandController::class);
