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
//insert data
Route::get('postCode', 'PostController@postCode');

//post edit..
Route::get('post/edit/{id}', 'PostController@editPost')->name('editPost');

Route::get('getCategory/{type}', 'PostController@getCategory');

// //fetch data
Route::get('showPost', 'PostController@showPost')->name('showPost');
//post delete
Route::get('delete/{id}', 'PostController@delete')->name('deletePost');
//post delete
Route::get('delete-category/{id}', 'CategoryController@delete_category')->name('delete_category');
