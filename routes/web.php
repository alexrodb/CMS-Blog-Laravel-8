<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;

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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/

Route::redirect('/', 'blog');

//web
Route::get('blog',             'App\Http\Controllers\Web\PageController@blog')->name('blog');
Route::get('entrada/{slug}',   'App\Http\Controllers\Web\PageController@post')->name('post');
Route::get('categoria/{slug}', 'App\Http\Controllers\Web\PageController@category')->name('category');
Route::get('etiqueta/{slug}',  'App\Http\Controllers\Web\PageController@tag')->name('tag');

//Administración
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {return view('dashboard');})->name('dashboard');
//Route::view('/dashboard',        'admin\dashboardIndex')->name('dashboard')->middleware('auth');

Route::resource('categories',     CategoryController::class)->names('admin.categories');
Route::resource('tags',           TagController::class)->names('admin.tags');
Route::resource('posts',          PostController::class)->names('admin.posts');