
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Profile\UserController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\MenuController;



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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthenticationController::class, 'index'])->name('login');
    Route::get('/login', [AuthenticationController::class, 'index'])->name('login');
    Route::post('/auth', [AuthenticationController::class, 'authenticate'])->name('auth.authenticate');

    // REGISTER
    Route::get('/register', [AuthenticationController::class, 'register'])->name('register');
    Route::post('/register', [AuthenticationController::class, 'store'])->name('register.store');

    // VERIFICATION
    Route::get('/email/verify', [AuthenticationController::class, 'verificationNotice'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [AuthenticationController::class, 'verificationVerify'])->name('verification.verify');

    // FORGOT PASSWORD
    Route::get('/password/forgot', [AuthenticationController::class, 'forgotPassword'])->name('forgot-password');
    Route::post('/password/forgot', [AuthenticationController::class, 'sendResetLinkEmail'])->name('forgot-password.send');
    Route::get('/password/reset/{token}', [AuthenticationController::class, 'showResetForm'])->name('password.reset');
    Route::post('/password/reset', [AuthenticationController::class, 'resetPassword'])->name('password.update');
});

Route::middleware(['auth'])->group(function () {

    // verification.notice
    Route::get('/email/verify', [AuthenticationController::class, 'verificationNotice'])->name('verification.notice');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::get('/settings/profile', [SettingsController::class, 'profile'])->name('settings.profile');
    Route::get('/settings/account', [SettingsController::class, 'account'])->name('settings.account');
    Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');
});
