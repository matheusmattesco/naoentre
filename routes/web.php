<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('users', [\App\Http\Controllers\UsersController::class, 'index']);
Route::get('users/create', [\App\Http\Controllers\UsersController::class, 'create']);
Route::post('users', [\App\Http\Controllers\UsersController::class, 'store']);
Route::get('users/edit/{user}', [\App\Http\Controllers\UsersController::class, 'edit']);
Route::put('users/{user}', [\App\Http\Controllers\UsersController::class, 'update']);
Route::delete('users/{user}', [\App\Http\Controllers\UsersController::class, 'destroy']);

Route::get('categories', [\App\Http\Controllers\CategoriesController::class, 'index']);
Route::get('categories/create', [\App\Http\Controllers\CategoriesController::class, 'create']);
Route::post('categories', [\App\Http\Controllers\CategoriesController::class, 'store']);
Route::get('categories/edit/{Categories}', [\App\Http\Controllers\CategoriesController::class, 'edit']);
Route::put('categories/{Categories}', [\App\Http\Controllers\CategoriesController::class, 'update']);
Route::delete('categories/{Categories}', [\App\Http\Controllers\CategoriesController::class, 'destroy']);

Route::get('Tag', [\App\Http\Controllers\TagController::class, 'index']);
Route::get('Tag/create', [\App\Http\Controllers\TagController::class, 'create']);
Route::post('Tag', [\App\Http\Controllers\TagController::class, 'store']);
Route::get('Tag/edit/{Tag}', [\App\Http\Controllers\TagController::class, 'edit']);
Route::put('Tag/{Tag}', [\App\Http\Controllers\TagController::class, 'update']);
Route::delete('Tag/{Tag}', [\App\Http\Controllers\TagController::class, 'destroy']);