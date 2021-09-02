<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FollowsController;
use App\http\Controllers\MailController;
use App\Mail\newUserWelcomeMail;
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
// Route::get('/email', function() {
//     return new NewUserWelcomeMail();
// });
Route::get('jk', [MailController::class, 'hai']);
Route::post('follow/{user}',[App\Http\Controllers\FollowsController::class, 'store']);
//Route::post('follow/{user}', [FollowsController::class, 'store']);


Route::get('/profile/{user}',[App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit',[App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}',[App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');

Route::get('/',[App\Http\Controllers\PostController::class, 'index']);
Route::get('/p/create',[App\Http\Controllers\PostController::class, 'create']);
Route::post('/p',[App\Http\Controllers\PostController::class, 'store']);
Route::get('/p/{post}',[App\Http\Controllers\PostController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
