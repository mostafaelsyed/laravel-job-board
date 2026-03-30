<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\jobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/job' , [jobController::class , 'index']);
Route::get('/home', [indexController::class, 'index']);
Route::get('/about', [indexController::class, 'about']);
Route::get('/contact', [indexController::class, 'contact']);

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/create', [PostController::class, 'create']);
Route::get('/blog/{id}', [PostController::class, 'show']);
Route::get('/blog/{id}/delete', [PostController::class, 'delete']);

Route::get('/comments', [CommentController::class, 'index']);
Route::get('/comments/create', [CommentController::class, 'create']);
Route::get('/comments/{id}', [CommentController::class, 'show']);

Route::get('/tags', [TagController::class, 'index']);
Route::get('/tags/create', [TagController::class, 'create']);
Route::get('/tags/test-many', [TagController::class, 'testManyToMany']);
Route::get('/tags/{id}', [TagController::class, 'show']);
Route::get('/tags/{id}/delete', [TagController::class, 'delete']);

