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

Route::get('/', "IndexController@index");

Route::get('/videos',"VideoController@index");

Route::get('/factory/{count}', function($count){
    Video::factory($count)->create();
});

Route::get('/test',function(){
    return view('test');
});