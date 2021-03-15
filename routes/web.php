<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;
use App\Http\Controllers\Admin;
// use App\Http\Controllers\Admin\MainController;
// use App\Http\Controllers\Admin\ContactController;
// use App\Http\Controllers\Admin\CompanyInfoController;

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




Route::get('about', function () {
    return view('about.index');
})->name('about');
Route::get('blog', function () {
    return view('news.blog');
})->name('blog');
Route::get('blog-details', function () {
    return view('news.blog');
})->name('blogDetails');
Route::get('/contact', [Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact', [Controllers\ContactController::class, 'store'])->name('contactForm');

Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', [Admin\MainController::class, 'index'])->name('admin.index');
    Route::get('contact', [Admin\ContactController::class, 'index'])->name('admin.contact.index');
    
    Route::resource('menu', Admin\MenuController::class, ['except' => ['show']]);
    Route::resource('main-slider', Admin\MainSliderController::class);
    Route::resource('pages', Admin\PageController::class, ['except' => ['show']]);
    

    Route::group(['prefix' => 'settings'], function () {
        Route::get('company', [Admin\CompanyContactDataController::class, 'index'])->name('admin.settings.company.index');
        Route::put('company', [Admin\CompanyContactDataController::class, 'update'])->name('admin.settings.company.update');

        Route::get('site-settings', [Admin\SettingsController::class, 'index'])->name('admin.settings.site-settings.index');
        Route::put('site-settings', [Admin\SettingsController::class, 'update'])->name('admin.settings.site-settings.update');
    });
});

Route::get("/{slug?}", [Controllers\HomeController::class, 'index'], ['slug' => 'slug'])->name('home');