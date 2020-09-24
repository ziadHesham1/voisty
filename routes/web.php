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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Route::view('/files', 'test', [
    'page_name' => "test page",
    'subject' => 'Database Systems',
    'inst' => 'Dr.Hossam',
    'type' => 'Lecture',
    'week' => "third",
    'upname' => "Ahmed Nour",
    'uptime' => "2020-5-11 3:29pm"
]);*/

Route::view('/up', 'up');
Route::post('up', 'uploadController@store');
Route::view('/landing', 'landing');

Route::get('dashboard', function () {
    return redirect()->route('up');
});
Route::resource('uploadfile', 'uploadController');
///////////////////////////
Route::get('/files','downloadController@index')->name('filesRoute');
Route::get('/files/down/{id}','downloadController@show')->name('downloadRoute');
Route::view('/home', 'home')->name('homeRooute');

Route::get('/modeltest', function () {

    $thefile = \App\fileUpload::load(1) ;
    return $thefile;
});

