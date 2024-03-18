<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CommonController;

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


//Frontend Routes
Route::get('/', 'FrontendController@index')->name('home');
Route::get('/cells', 'FrontendController@cells')->name('cells');
Route::get('/collaborations', 'FrontendController@collaborations')->name('collaborations');
Route::get('/community', 'FrontendController@community')->name('community');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::get('/courses', 'FrontendController@courses')->name('courses');
Route::get('/content', 'FrontendController@content')->name('content');
Route::get('/credentials', 'FrontendController@credentials')->name('credentials');
Route::get('/pg', 'FrontendController@pg')->name('pg');
Route::get('/privacy-policy', 'FrontendController@privacypolicy')->name('privacypolicy');
Route::get('/institution-registration', 'FrontendController@institutionregistration');
Route::post('/institution-registration/post', 'FrontendController@institutionregistrationpost');
Route::get('/what-is-iks', 'FrontendController@whatisiks')->name('whatisiks');
Route::get('/why-iks', 'FrontendController@whyiks')->name('whyiks');
Route::get('/tamil-ariviyal', 'FrontendController@tamilariviyal');