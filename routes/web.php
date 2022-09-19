<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Ecommerce\LoginController;
use App\Http\Controllers\Ecommerce\FrontController;
use Maatwebsite\Excel\Row;

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

Route::group(['prefix' => 'administrator', 'middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('category', CategoryController::class)->except(['create', 'show']);

    Route::resource('event', EventController::class)->except(['show']);
    Route::get('/event/bulk', 'App\Http\Controllers\EventController@massUploadForm')->name('event.bulk');
    Route::post('/event/bulk', 'App\Http\Controllers\EventController@massUpload')->name('event.saveBulk');

    Route::resource('member', MemberController::class)->except(['show']);
    Route::get('/member/bulk', [MemberController::class, 'massUploadForm'])->name('member.bulk');
    Route::post('/member/bulk', 'App\Http\Controllers\memberController@massUpload')->name('member.saveBulk');

});

// Route::get('/coba', [App\Http\Controllers\Ecommerce\FrontController::class, 'api'])->name('front.coba');
Route::get('/content', [FrontController::class, 'api'])->name('front.content');
Route::get('/about', function () {
    return view('ecommerce.about');
});
Route::get('/service', function () {
    return view('ecommerce.service');
});

Route::get('/', [FrontController::class, 'index'])->name('front.index');

Route::get('/event', [FrontController::class, 'event'])->name('front.event');
Route::get('/event/{slug}', [FrontController::class, 'show'])->name('front.show_event');

Route::get('/category/{slug}', [FrontController::class, 'categoryevent'])->name('front.category');

Route::get('/member', [FrontController::class, 'member'])->name('front.member');
Route::post('/member', [FrontController::class, 'memberCheck'])->name('front.member_check');

Route::group(['prefix' => 'member', 'namespace' => 'Ecommerce'], function() {
    Route::get('login', [LoginController::class, 'loginForm'])->name('member.login');
    Route::get('register', [LoginController::class, 'registerForm'])->name('member.register');
    Route::get('verify/{token}', [FrontController::class, 'verifyMemberRegistration'])->name('member.verify');
    Route::post('login', [LoginController::class, 'login'])->name('member.post_login');
    Route::group(['middleware' => 'member'], function() {
        Route::get('dashboard', [LoginController::class, 'dashboard'])->name('member.dashboard');
        Route::get('logout', [LoginController::class, 'logout'])->name('member.logout');
    });
});
