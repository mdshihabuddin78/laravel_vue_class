<?php

use Illuminate\Support\Facades\Route;


Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'doLogin']);

Route::view('/admin/{any}', 'singleApp')->where('any', '.*');

Route::prefix('api')->group(function () {
    Route::resource('categories', \App\Http\Controllers\CategoryController::class);
    Route::resource('sub_categories', \App\Http\Controllers\SubCategoryController::class);
});