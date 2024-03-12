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
Route::get('/', 'FrontendController@index');
Route::get('/cells', 'FrontendController@cells');
Route::get('/collaborations', 'FrontendController@collaborations');
Route::get('/community', 'FrontendController@community');
Route::get('/contact', 'FrontendController@contact');
Route::get('/courses', 'FrontendController@courses');
Route::get('/content', 'FrontendController@content');
Route::get('/credentials', 'FrontendController@credentials');
Route::get('/pg', 'FrontendController@pg');
Route::get('/privacy-policy', 'FrontendController@privacypolicy');
Route::get('/institution-registration', 'FrontendController@institutionregistration');
Route::post('/institution-registration/post', 'FrontendController@institutionregistrationpost');
Route::get('/what-is-iks', 'FrontendController@whatisiks');
Route::get('/why-iks', 'FrontendController@whyiks');
Route::get('/tamil-ariviyal', 'FrontendController@tamilariviyal');