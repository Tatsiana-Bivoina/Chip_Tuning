<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'Home'], function () {
    Route::get('/', 'IndexController')->name('home.index');
});

Route::group(['namespace' => 'VehicleList'], function () {
    Route::get('/page/vehicle-list', 'IndexController')->name('vehicleList.index');
});

Route::group(['namespace' => 'ChiptuningService'], function () {
    Route::get('/page/chiptuning-services', 'IndexController')->name('chiptuningService.index');
});

Route::group(['namespace' => 'Pricing'], function () {
    Route::get('/page/pricing', 'IndexController')->name('pricing.index');
});

Route::group(['namespace' => 'Contact'], function () {
    Route::get('/page/contact-us', 'IndexController')->name('contacts.index');
});

Route::group(['namespace' => 'MemberArea'], function () {
    Route::get('/member-area', 'IndexController')
        ->middleware(['auth', 'verified'])
        ->name('memberArea.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
