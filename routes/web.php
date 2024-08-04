<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['guest'])->group(function () {
    Route::get('login', [AuthController::class, 'loginView'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login');


    Route::get('register', [AuthController::class, 'registerView'])->name('register');
    Route::post('register', [AuthController::class, 'register'])->name('register');
});
Route::middleware(['auth'])->group(function () {
    Route::middleware([isAdmin::class])->prefix('admin')->group(function () {
        Route::get('blog', function () {
            return view('admin.manage-blog');
        })->name('manage_blog');
    });

    Route::get('blog', function () {
        return view('blog');
    })->name('blog');

    Route::post('logout', [AuthController::class, 'logout'])->name("logout");
});
