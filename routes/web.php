<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\Pages\HomeController::class, 'index'])
    ->name('homepage');

Auth::routes();

Route::group(['prefix'=>'admin','as'=>'admin.', 'middleware' => 'auth'], function() {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])
        ->name('dashboard');


    /**
     * Post routes
     */
    Route::get('posts', [\App\Http\Controllers\Admin\PostController::class, 'index'])
        ->name('posts.index');
    Route::get('posts/create', [\App\Http\Controllers\Admin\PostController::class, 'create'])
        ->name('posts.create');
    Route::post('posts', [\App\Http\Controllers\Admin\PostController::class, 'store'])
        ->name('posts.store');
    Route::get('posts/{id}/edit', [\App\Http\Controllers\Admin\PostController::class, 'edit'])
        ->name('posts.edit');
    Route::put('posts/{id}', [\App\Http\Controllers\Admin\PostController::class, 'update'])
        ->name('posts.update');
    Route::delete('posts/{id}', [\App\Http\Controllers\Admin\PostController::class, 'destroy'])
        ->name('posts.delete');


    /**
     * Settings routes
     */
    Route::get('settings', [\App\Http\Controllers\Admin\SettingsController::class, 'index'])
        ->name('settings.index');
    Route::post('settings', [\App\Http\Controllers\Admin\SettingsController::class, 'store'])
        ->name('settings.store');


    /**
     * Profile routes
     */
    Route::get('profile', [\App\Http\Controllers\Admin\ProfileController::class, 'index'])
        ->name('profile.index');
    Route::put('profile', [\App\Http\Controllers\Admin\ProfileController::class, 'update'])
        ->name('profile.update');

    /**
     * Password routes
     */
    Route::put('password', [\App\Http\Controllers\Admin\PasswordController::class, 'update'])
        ->name('password.update');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog.home');
Route::get('article/{slug}', [\App\Http\Controllers\BlogController::class, 'article'])->name('blog.article');



/**
 * GDPR page
 */
Route::get('privacy-policy', [\App\Http\Controllers\Pages\PrivacyPolicyController::class, 'index'])->name('privacy-policy.index');
Route::get('gdpr', [\App\Http\Controllers\Pages\GdprPageController::class, 'index'])->name('gdpr.index');
Route::get('promo', [\App\Http\Controllers\Pages\BlackFridayController::class, 'index'])->name('blackfriday.index');
Route::post('newsletter/subscribe', [\App\Http\Controllers\EmailSubscribeController::class, 'store'])->name('newsletter.store');
