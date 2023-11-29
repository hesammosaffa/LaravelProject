<?php

use App\Models\Video;
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

Route::get('/', "IndexController@index")->name('index');

Route::get('/videos/create',"VideoController@create")->name('videos.create');
Route::post('/videos',"VideoController@store")->name('videos.store');
Route::get('/videos/{video}', "VideoController@show")->name('videos.show');
route::get('/videos/{video}/edit', "VideoController@edit")->name('videos.edit');
route::post('/videos/{video}/', "VideoController@update")->name('videos.update');