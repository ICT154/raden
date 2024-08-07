<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\DashboardController as Dashboard;

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

Route::get('/', function () {
    return view('welcome');
});


// DASHBOARD
Route::get('/dashboard', [Dashboard::class, 'index'])->name('home');
Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard.index');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::get('/settings/profile', [SettingsController::class, 'profile'])->name('settings.profile');
Route::get('/settings/account', [SettingsController::class, 'account'])->name('settings.account');
// Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');
