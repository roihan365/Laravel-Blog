<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [ArticleController::class, 'index'])->name('beranda');
Route::get('artikel/{slug}', [ArticleController::class, 'show'])->name('detailblog');
Route::get('/user', [ArticleController::class, 'index'])->name('user');
Route::get('/users/detailblog', function () {
    return view('users.detailblog');
});

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('admin/artikel', ArticleController::class);

Auth::routes();


