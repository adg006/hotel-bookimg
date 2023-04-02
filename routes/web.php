<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\FeatureController;
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

/** SLIDER CONTROLLER */
Route::get('/admin/slider/', [SliderController::class, 'view'])->name('admin.slider')->middleware('admin:admin');
Route::get('/admin/slider/add', [SliderController::class, 'add'])->name('admin.slider.add')->middleware('admin:admin');
Route::post('/admin/slider/store', [SliderController::class, 'store'])->name('admin.slider.store')->middleware('admin:admin');
Route::get('/admin/slider/edit/{id}', [SliderController::class, 'edit'])->name('admin.slider.edit')->middleware('admin:admin');
Route::post('/admin/slider/update/{id}', [SliderController::class, 'update'])->name('admin.slider.update')->middleware('admin:admin');
Route::get('/admin/slider/delete/{id}', [SliderController::class, 'delete'])->name('admin.slider.delete')->middleware('admin:admin');

/**FEATURES CONTROLLER */
Route::get('/admin/features/', [FeatureController::class, 'view'])->name('admin.features')->middleware('admin:admin');
Route::get('/admin/features/add', [FeatureController::class, 'add'])->name('admin.features.add')->middleware('admin:admin');
Route::post('/admin/features/store', [FeatureController::class, 'store'])->name('admin.features.store')->middleware('admin:admin');
Route::get('/admin/features/edit/{id}', [FeatureController::class, 'edit'])->name('admin.features.edit')->middleware('admin:admin');
Route::post('/admin/features/update/{id}', [FeatureController::class, 'update'])->name('admin.features.update')->middleware('admin:admin');
Route::get('/admin/features/delete/{id}', [FeatureController::class, 'delete'])->name('admin.features.delete')->middleware('admin:admin');

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