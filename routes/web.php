<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\FooterController;
use App\Http\Controllers\backend\SocialController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'Dashboard'])->name('dashboard');

    //Header
    Route::get('/social-setting', [SocialController::class, 'Social']);
    Route::get('/logo-setting', [SocialController::class, 'LogoSetting']);

    //Footer
    Route::get('/top-footer', [FooterController::class, 'TopFooter']);
    Route::get('/bottom-footer', [FooterController::class, 'BottomFooter']);


});

/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

require __DIR__.'/auth.php';
