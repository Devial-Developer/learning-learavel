<?php

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
// Route::get('first', function () {
//     return view('first');
// });

// Route::get('locale/{locale}', function ($locale) {
//     Session::put('locale', $locale);
//     return redirect()->back();
// });

//Registration
Route::get('/', function () {
    return view('register');
});

//after submition
Route::get('registrationCode', 'RegistrationController@index');
Route::get('registrationCode', 'RegistrationController@registrationCode');

//login
Route::get('login', 'RegistrationController@login');
Route::get('loginCode', 'RegistrationController@loginCode');

// after login come to dashboard
Route::get('dashboard', 'RegistrationController@dashboard');

//Add-category
Route::get('category', 'CategoryController@Category');
Route::get('CaregoryCode', 'CategoryController@CaregoryCode');

//fetch data
Route::get('showCategory', 'CategoryController@showCategory')->name('showCategory');

//posts
Route::get('post', 'PostController@FunctionNamePost');
Route::get('postCode', 'PostController@postCode');

Route::get('select/{type}', 'PostController@categoryType');

// //fetch data
// Route::get('showPost', 'PostController@showPost')->name('showPost');
