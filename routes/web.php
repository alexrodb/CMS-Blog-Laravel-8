<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\blog\CategoryController;
use App\Http\Controllers\Admin\blog\TagController;
use App\Http\Controllers\Admin\blog\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', 'blog');

//web
Route::get('blog',             'App\Http\Controllers\Web\blog\PageController@blog')->name('blog');
Route::get('entrada/{slug}',   'App\Http\Controllers\Web\blog\PageController@post')->name('post');
Route::get('categoria/{slug}', 'App\Http\Controllers\Web\blog\PageController@category')->name('category');
Route::get('etiqueta/{slug}',  'App\Http\Controllers\Web\blog\PageController@tag')->name('tag');

//Administración
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {return view('admin.dashboard');})->name('dashboard');

Route::resource('categories',     CategoryController::class)->names('admin.categories');
Route::resource('tags',           TagController::class)->names('admin.tags');
Route::resource('posts',          PostController::class)->names('admin.posts');