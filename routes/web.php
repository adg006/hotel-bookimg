<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Frontend\TnCController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\FaqsController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\SignupController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\PrivacyController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\SubscriberController;
use App\Http\Controllers\Frontend\FrontendLoginController;

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

/** TESTIMONIAL CONTROLLER */
Route::get('/admin/testimonials/', [TestimonialController::class, 'view'])->name('admin.testimonials')->middleware('admin:admin');
Route::get('/admin/testimonials/add', [TestimonialController::class, 'add'])->name('admin.testimonials.add')->middleware('admin:admin');
Route::post('/admin/testimonials/store', [TestimonialController::class, 'store'])->name('admin.testimonials.store')->middleware('admin:admin');
Route::get('/admin/testimonials/edit/{id}', [TestimonialController::class, 'edit'])->name('admin.testimonials.edit')->middleware('admin:admin');
Route::post('/admin/testimonials/update/{id}', [TestimonialController::class, 'update'])->name('admin.testimonials.update')->middleware('admin:admin');
Route::get('/admin/testimonials/delete/{id}', [TestimonialController::class, 'delete'])->name('admin.testimonials.delete')->middleware('admin:admin');

/** POST CONTROLLER */
Route::get('/admin/posts/', [PostController::class, 'view'])->name('admin.posts')->middleware('admin:admin');
Route::get('/admin/posts/add', [PostController::class, 'add'])->name('admin.posts.add')->middleware('admin:admin');
Route::post('/admin/posts/store', [PostController::class, 'store'])->name('admin.posts.store')->middleware('admin:admin');
Route::get('/admin/posts/edit/{id}', [PostController::class, 'edit'])->name('admin.posts.edit')->middleware('admin:admin');
Route::post('/admin/posts/update/{id}', [PostController::class, 'update'])->name('admin.posts.update')->middleware('admin:admin');
Route::get('/admin/posts/delete/{id}', [PostController::class, 'delete'])->name('admin.posts.delete')->middleware('admin:admin');

/** IMAGE CONTROLLER */
Route::get('/admin/images/', [ImageController::class, 'view'])->name('admin.images')->middleware('admin:admin');
Route::get('/admin/images/add', [ImageController::class, 'add'])->name('admin.images.add')->middleware('admin:admin');
Route::post('/admin/images/store', [ImageController::class, 'store'])->name('admin.images.store')->middleware('admin:admin');
Route::get('/admin/images/edit/{id}', [ImageController::class, 'edit'])->name('admin.images.edit')->middleware('admin:admin');
Route::post('/admin/images/update/{id}', [ImageController::class, 'update'])->name('admin.images.update')->middleware('admin:admin');
Route::get('/admin/images/delete/{id}', [ImageController::class, 'delete'])->name('admin.images.delete')->middleware('admin:admin');

/** VIDEO CONTROLLER */
Route::get('/admin/videos/', [VideoController::class, 'view'])->name('admin.videos')->middleware('admin:admin');
Route::get('/admin/videos/add', [VideoController::class, 'add'])->name('admin.videos.add')->middleware('admin:admin');
Route::post('/admin/videos/store', [VideoController::class, 'store'])->name('admin.videos.store')->middleware('admin:admin');
Route::get('/admin/videos/edit/{id}', [VideoController::class, 'edit'])->name('admin.videos.edit')->middleware('admin:admin');
Route::post('/admin/videos/update/{id}', [VideoController::class, 'update'])->name('admin.videos.update')->middleware('admin:admin');
Route::get('/admin/videos/delete/{id}', [VideoController::class, 'delete'])->name('admin.videos.delete')->middleware('admin:admin');

/** FAQ CONTROLLER */
Route::get('/admin/faq/', [FaqController::class, 'view'])->name('admin.faq')->middleware('admin:admin');
Route::get('/admin/faq/add', [FaqController::class, 'add'])->name('admin.faq.add')->middleware('admin:admin');
Route::post('/admin/faq/store', [FaqController::class, 'store'])->name('admin.faq.store')->middleware('admin:admin');
Route::get('/admin/faq/edit/{id}', [FaqController::class, 'edit'])->name('admin.faq.edit')->middleware('admin:admin');
Route::post('/admin/faq/update/{id}', [FaqController::class, 'update'])->name('admin.faq.update')->middleware('admin:admin');
Route::get('/admin/faq/delete/{id}', [FaqController::class, 'delete'])->name('admin.faq.delete')->middleware('admin:admin');

/** LOGIN CONTROLLER */
Route::get('/admin/login/', [LoginController::class, 'login'])->name('admin.login');
Route::post('/admin/login/submit', [LoginController::class, 'login_submit'])->name('admin.login.submit');
Route::get('/admin/logout/', [LoginController::class, 'logout'])->name('admin.logout');

Route::get('/admin/password/forget', [LoginController::class, 'forget_password'])->name('admin.forget_password');
Route::post('/admin/password/submit', [LoginController::class, 'forget_password_submit'])->name('admin.forget_password.submit');
Route::get('/admin/password/verify/{email}/{token}', [LoginController::class, 'verify_password'])->name('admin.verify_password');
Route::post('/admin/password/verify/submit', [LoginController::class, 'reset_password_submit'])->name('admin.reset_password.submit');

/** PAGE CONTROLLER */
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [BlogController::class, 'blog_detail'])->name('blog.detail');
Route::get('/photo', [GalleryController::class, 'photo'])->name('gallery.photo');
Route::get('/video', [GalleryController::class, 'video'])->name('gallery.video');
Route::get('/faq', [FaqsController::class, 'faq'])->name('faq');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/terms-and-conditions', [TnCController::class, 'tnc'])->name('tnc');
Route::get('/privacy-policy', [PrivacyController::class, 'privacy'])->name('privacy');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact/email/send', [ContactController::class, 'email'])->name('send.email');
Route::post('/subscriber/email/send', [SubscriberController::class, 'email'])->name('subscriber.send.email');
Route::get('/subscriber/verify/{email}/{token}', [SubscriberController::class, 'verify'])->name('subscriber.verify');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::get('/payment', [PaymentController::class, 'payment'])->name('payment');
Route::get('/signup', [SignupController::class, 'signup'])->name('signup');
Route::get('/login', [FrontendLoginController::class, 'login'])->name('login');

Route::get('/admin/pages/about', [PagesController::class, 'about'])->name('admin.pages.about')->middleware('admin:admin');
Route::post('/admin/pages/about/update', [PagesController::class, 'about_update'])->name('admin.pages.about.update')->middleware('admin:admin');
Route::get('/admin/pages/tnc', [PagesController::class, 'tnc'])->name('admin.pages.tnc')->middleware('admin:admin');
Route::post('/admin/pages/tnc/update', [PagesController::class, 'tnc_update'])->name('admin.pages.tnc.update')->middleware('admin:admin');
Route::get('/admin/pages/privacy', [PagesController::class, 'privacy'])->name('admin.pages.privacy')->middleware('admin:admin');
Route::post('/admin/pages/privacy/update', [PagesController::class, 'privacy_update'])->name('admin.pages.privacy.update')->middleware('admin:admin');
Route::get('/admin/pages/contact', [PagesController::class, 'contact'])->name('admin.pages.contact')->middleware('admin:admin');
Route::post('/admin/pages/contact/update', [PagesController::class, 'contact_update'])->name('admin.pages.contact.update')->middleware('admin:admin');
Route::get('/admin/pages/image', [PagesController::class, 'image'])->name('admin.pages.image')->middleware('admin:admin');
Route::post('/admin/pages/image/update', [PagesController::class, 'image_update'])->name('admin.pages.image.update')->middleware('admin:admin');
Route::get('/admin/pages/video', [PagesController::class, 'video'])->name('admin.pages.video')->middleware('admin:admin');
Route::post('/admin/pages/video/update', [PagesController::class, 'video_update'])->name('admin.pages.video.update')->middleware('admin:admin');
Route::get('/admin/pages/blog', [PagesController::class, 'blog'])->name('admin.pages.blog')->middleware('admin:admin');
Route::post('/admin/pages/blog/update', [PagesController::class, 'blog_update'])->name('admin.pages.blog.update')->middleware('admin:admin');
Route::get('/admin/pages/faq', [PagesController::class, 'faq'])->name('admin.pages.faq')->middleware('admin:admin');
Route::post('/admin/pages/faq/update', [PagesController::class, 'faq_update'])->name('admin.pages.faq.update')->middleware('admin:admin');
Route::get('/admin/pages/cart', [PagesController::class, 'cart'])->name('admin.pages.cart')->middleware('admin:admin');
Route::post('/admin/pages/cart/update', [PagesController::class, 'cart_update'])->name('admin.pages.cart.update')->middleware('admin:admin');
Route::get('/admin/pages/checkout', [PagesController::class, 'checkout'])->name('admin.pages.checkout')->middleware('admin:admin');
Route::post('/admin/pages/checkout/update', [PagesController::class, 'checkout_update'])->name('admin.pages.checkout.update')->middleware('admin:admin');
Route::get('/admin/pages/payment', [PagesController::class, 'payment'])->name('admin.pages.payment')->middleware('admin:admin');
Route::post('/admin/pages/payment/update', [PagesController::class, 'payment_update'])->name('admin.pages.payment.update')->middleware('admin:admin');
Route::get('/admin/pages/signup', [PagesController::class, 'signup'])->name('admin.pages.signup')->middleware('admin:admin');
Route::post('/admin/pages/signup/update', [PagesController::class, 'signup_update'])->name('admin.pages.signup.update')->middleware('admin:admin');
Route::get('/admin/pages/login', [PagesController::class, 'login'])->name('admin.pages.login')->middleware('admin:admin');
Route::post('/admin/pages/login/update', [PagesController::class, 'login_update'])->name('admin.pages.login.update')->middleware('admin:admin');
