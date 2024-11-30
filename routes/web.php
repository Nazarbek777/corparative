<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CandidantController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\VacancyController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\SuperAdminController;
use App\Http\Controllers\auth\AdminController;
use App\Http\Controllers\Frontend\MainController;
use Illuminate\Support\Facades\Route;


//Admin panel login register start
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
//Admin panel login register end

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/product', [MainController::class, 'product'])->name('product');
Route::get('/checkout', [MainController::class, 'checkout'])->name('checkout');

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/',[SuperAdminController::class, 'superAdmin'])->name('superAdmin.dashboard');
    Route::get('/admin',[AdminController::class, 'admin'])->name('admins.dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('news', NewsController::class);
    Route::resource('abouts', AboutController::class);
    Route::resource('faqs', FaqController::class);
    Route::resource('teams', TeamController::class);
    Route::resource('partners', PartnerController::class);
    Route::resource('settings', SettingController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('vacancies', VacancyController::class);
    Route::resource('candidants', CandidantController::class);
});
