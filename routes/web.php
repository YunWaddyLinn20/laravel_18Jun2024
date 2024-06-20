<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('front.index');
Route::get('item/{item_id}', [App\Http\Controllers\FrontendController::class, 'show'])->name('front.show');
Route::group(['prefix'=>'backend', 'as'=>'backend.'],function(){
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
