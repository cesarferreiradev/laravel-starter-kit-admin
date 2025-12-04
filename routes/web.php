<?php

use App\Livewire\Admin\Auth\Login;
use App\Livewire\Admin\Auth\Logout;
use App\Livewire\Admin\Home\IndexHome;
use App\Livewire\Admin\Users\IndexUsers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
})->name('home');

Route::middleware('guest')->prefix('admin')->group(function () {
    Route::get('login', Login::class)->name('login');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('users', IndexUsers::class)->name('users.index');
    Route::get('home', IndexHome::class)->name('home.index');
});

Route::post('logout', Logout::class)
    ->name('logout');
