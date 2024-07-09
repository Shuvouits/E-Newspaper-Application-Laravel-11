<?php

use App\Http\Controllers\backend\AdvertiseController;
use App\Http\Controllers\backend\ContentController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\FooterController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\backend\SocialController;
//use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', [DashboardController::class, 'FrontendDashboard']);


Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'Dashboard'])->name('dashboard');

    //Header
    Route::get('/social-setting', [SocialController::class, 'Social']);
    Route::post('/social-setting', [SocialController::class, 'InsertSocial']);
    Route::get('/logo-setting', [SocialController::class, 'LogoSetting']);
    Route::post('/logo-setting', [SocialController::class, 'InsertLogo']);

    //Footer
    Route::get('/top-footer', [FooterController::class, 'TopFooter']);
    Route::post('/top-footer', [FooterController::class, 'InsertTopFooter']);
    Route::get('/bottom-footer', [FooterController::class, 'BottomFooter']);
    Route::post('/bottom-footer', [FooterController::class, 'InsertBottomFooter']);

    //Advertise
    Route::get('/left-advertise', [AdvertiseController::class, 'LeftAdvertise']);
    Route::post('/left-advertise', [AdvertiseController::class, 'InsertLeftAdvertise']);
    Route::get('/right-advertise', [AdvertiseController::class, 'RightAdvertise']);
    Route::post('/right-advertise', [AdvertiseController::class, 'InsertRightAdvertise']);

    //Content
    Route::get('/add-content', [ContentController::class, 'AddContent']);
    Route::post('/insert-content', [ContentController::class, 'InsertContent']);
    Route::get('/view-content', [ContentController::class, 'ViewContent']);
    Route::delete('/post/{id}', [ContentController::class, 'destroy'])->name('post.destroy');
    Route::get('/edit/content/{id}', [ContentController::class, 'EditContent']);
    Route::post('/update-content', [ContentController::class, 'UpdateContent']);
    Route::get('/remove/image-content/{id}', [ContentController::class, 'RemoveContent']);

    //Profile
    Route::get('/profile', [ProfileController::class, 'Profile']);
    Route::get('/setting', [ProfileController::class, 'Setting']);
    Route::post('/profile', [ProfileController::class, 'UpdateProfile']);
    Route::post('/password-reset', [ProfileController::class, 'PasswordReset']);




});

/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

require __DIR__.'/auth.php';
