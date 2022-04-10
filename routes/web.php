<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Learningview;
use App\Http\Controllers\LearningBlade;
use App\Http\Controllers\HtmlForm;
use App\Http\Controllers\LearnMiddle;

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
// Controller Call with Route Parameters
Route::get('user/{id}', [UserController::class, 'index']);
// Simply View Call
Route::get('learnview', [Learningview::class, 'index']);
//View Call with view parameter
Route::get('usercheck', function () {
    return view('learnview.viewcheck', ['name' => 'James']);
});
//View call with Route Parameter
Route::get('usercheckroute/{name1}', function ($name1) {
    return view('learnview.viewcheck', ['name' => $name1]);
});
//Route Parameter Pass to controller and parameter send to view 
Route::get('/userviewcheck/{user}', [Learningview::class, 'loadview']);

//Learn Component Route
Route::view('/learncompo', 'LearnCompo.user');
Route::view('/learncompoabout', 'LearnCompo.about');

//LearnBlade
Route::get('/learnblade', [LearningBlade::class, 'index']);

// Html Form
Route::get('/htmlform', [HtmlForm::class, 'index']);
Route::post('/htmlform/store', [HtmlForm::class, 'store'])->name('htmlform.store');

// Learn middleware

Route::view('/learn1', 'LearnMiddle.learn_m1');
Route::view('/learn2', 'LearnMiddle.learn_m2');
Route::view('/learn3', 'LearnMiddle.learn_m3');

//Apply Middleware
Route::group(['middleware' => ['protectPage']], function () {
    Route::view('/learn1', 'LearnMiddle.learn_m1');
});

// Learn Middleware

Route::get('/learnmiddle/home', function () {
    return view('LearnMiddle.home');
});
Route::get('/learnmiddle/dashboard', function () {
    return view('LearnMiddle.dashboard');
});
Route::get('/learnmiddle/report', function () {
    return view('LearnMiddle.report');
});
Route::get('/learnmiddle/stock', function () {
    return view('LearnMiddle.stock');
});
