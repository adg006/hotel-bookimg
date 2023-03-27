<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\PageController;

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

/** DASHBOARD CONTROLLER */
Route::get('/admin/dashboard/', [DashboardController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin:admin');
Route::get('/admin/profile/edit', [DashboardController::class, 'profile'])->name('admin.profile')->middleware('admin:admin');
Route::post('/admin/profile/submit', [DashboardController::class, 'profile_submit'])->name('admin.profile.submit')->middleware('admin:admin');

/** LOGIN CONTROLLER */
Route::get('/admin/login/', [LoginController::class, 'login'])->name('admin.login');
Route::post('/admin/login/submit', [LoginController::class, 'login_submit'])->name('admin.login.submit');
Route::get('/admin/logout/', [LoginController::class, 'logout'])->name('admin.logout');

Route::get('/admin/password/forget', [LoginController::class, 'forget_password'])->name('admin.forget_password');
Route::post('/admin/password/submit', [LoginController::class, 'forget_password_submit'])->name('admin.forget_password.submit');
Route::get('/admin/password/verify/{email}/{token}', [LoginController::class, 'verify_password'])->name('admin.verify_password');
Route::post('/admin/password/verify/submit', [LoginController::class, 'reset_password_submit'])->name('admin.reset_password.submit');

/** PAGE CONTROLLER */
Route::get('/', [PageController::class, 'home'])->name('home');