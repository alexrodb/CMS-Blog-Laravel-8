<?php

use Illuminate\Support\Facades\Route;

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
Route::get('etiqueta/{slug}',   'App\Http\Controllers\Web\PageController@tag')->name('tag');

//Administración
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//Route::view('/dashboard',        'admin\dashboardIndex')->name('dashboard')->middleware('auth');
Route::resource('characters',    'App\Http\Controllers\Admin\CharacterController');
Route::resource('works',         'App\Http\Controllers\Admin\WorkController');
Route::resource('episodes',      'App\Http\Controllers\Admin\EpisodeController');