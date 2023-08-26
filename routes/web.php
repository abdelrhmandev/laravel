<?php
use Illuminate\Support\Facades\Route;


Route::get('send-mail', function () {
 
    

    /////


    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
    \Mail::to('amgo123@gmail.com')->send(new \App\Mail\MyTestMail($details));
    dd("Email is Sent.");

});


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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
//https://www.toptal.com/laravel/restful-laravel-api-tutorial

 