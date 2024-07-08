<?php

use App\Http\Controllers\backend\AdvertiseController;
use App\Http\Controllers\backend\ContentController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\FooterController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\backend\SocialController;
//use App\Http\Controllers\ProfileController;
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

    //Advertise
    Route::get('/left-advertise', [AdvertiseController::class, 'LeftAdvertise']);
    Route::get('/right-advertise', [AdvertiseController::class, 'RightAdvertise']);

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
