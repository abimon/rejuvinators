<?php

use App\Http\Controllers\mainController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});
Route::get('/storage-link', function(){
    $target = storage_path('app/public');
    $link = public_path('/storage');
    symlink($target, $link);
    echo "symbolic link created successfully";
});
Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('music', function () {
    return view('music');
});
Route::get('poetry', function () {
    return view('poetry');
});
Route::get('spokenword', function () {
    return view('spokenword');
});
Route::get('gallery', function () {
    return view('gallery');
});
Route::get('views', function () {
    return view('views');
});
Route::post('/signup',[mainController::class,'signup']);
Route::post('/login',[mainController::class,'login']);
Route::get('/dashboard',[mainController::class,'dashboard']);
Route::post('/upload_audio',[mainController::class,'upload_audio']);
Route::get('/music',[mainController::class,'music']);
Route::post('/upload_video',[mainController::class,'upload_video']);
Route::get('/gallery',[mainController::class,'gallery']);