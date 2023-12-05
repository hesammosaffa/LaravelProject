<?php

use App\Events\VideoCreated;
use App\Jobs\Otp;
use App\Jobs\ProcessVideo;
use App\Mail\VerifyEmail;
use App\Models\User;
use App\Models\Video;
use App\Notifications\VideoProcessed;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

Route::get('/videos/create',"VideoController@create")->middleware('verifed.email')->name('videos.create');
Route::post('/videos',"VideoController@store")->name('videos.store');
Route::get('/videos/{video}', "VideoController@show")->name('videos.show');
route::get('/videos/{video}/edit', "VideoController@edit")->name('videos.edit');
route::post('/videos/{video}/', "VideoController@update")->name('videos.update');

Route::get('/categories/{category:slug}/videos', "CategoryVideoController@index")->name('category.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/verify/{id}', function () {
    dd(request()->hasValidSignature());
    echo "verify";
})->name('verify');

Route::get('/generate', function () {
    echo URL::temporarySignedRoute('verify',now()->addMinutes(1),['id' => 5]);
});

Route::get('/email', function () {
    Mail::to('hesam.mosaffa.1251@gmail.com')->send(new VerifyEmail(User::first()));
});

Route::get('/event', function () {
    $video = Video::first();
    VideoCreated::dispatch($video);
});
Route::get('/notify', function () {
    $user = User::first();
    $user->notify(new VideoProcessed(Video::first()));
});
