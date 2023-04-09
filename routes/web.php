<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoriesController;
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

Route::get('/', [HomeController::Class, 'home']);
Route::get('/about', [AboutController::Class, 'about']);
Route::get('/contact', [ContactController::Class, 'contact']);
Route::get('/blog', [BlogController::Class, 'blog']);
Route::get('/post/{slug:slug}', [PostController::Class, 'post']);
Route::get('/categories', [CategoriesController::Class, 'categories']);
Route::get('/category/{category:slug}', [CategoryController::Class, 'category']);


