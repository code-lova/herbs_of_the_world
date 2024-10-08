<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'bannUser'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




Route::controller(\App\Http\Controllers\Frontend\FrontendController::class)->group(function(){
    Route::get('/', 'index')->name('home');
});

//Social login routes
Route::controller(\App\Http\Controllers\SocialLoginController::class)->group(function() {
    Route::get('socialite/{driver}', 'toProvider')->where('driver', 'google');
    Route::get('auth/{driver}/callback', 'handleCallBack')->where('driver', 'google');

});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::controller(\App\Http\Controllers\Backend\AdminController::class)->group(function (){
        Route::get('/auth/admin/dashboard', 'index')->name('admin.dashboard');
    });

    Route::controller(\App\Http\Controllers\Backend\ProductController::class)->group(function (){
        Route::get('/auth/admin/add-product', 'createProduct')->name('crate.product');
    });

    Route::controller(\App\Http\Controllers\Backend\CategoryController::class)->group(function (){
        Route::get('/auth/admin/category', 'index')->name('category');
        Route::get('/auth/admin/create-category', 'create')->name('create.category');

    });



});



require __DIR__.'/auth.php';
