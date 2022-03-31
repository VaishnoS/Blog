<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Learningview;
use App\Http\Controllers\LearningBlade;

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
