<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\EducationalController;
use App\Http\Controllers\FrontEndController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['checkRole:admin'])->group(function () {

Route::get('/users', 'UserController@index')->name('users.index');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [FrontEndController::class, 'index']);

Route::resource('users', UserController::class);

Route::resource('abouts', AboutController::class);

Route::resource('skills', SkillController::class);

Route::resource('educationals', EducationalController::class);

Route::resource('contacts', ContactController::class);

