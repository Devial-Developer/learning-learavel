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
Route::get('/', 'CounController@dashboardName');

//after submition
Route::get('registrationCode', 'RegistrationController@index')->name('registrationCode');
Route::get('registrationCode', 'RegistrationController@registrationCode')->name('registrationCode')->middleware('naming');

//login
Route::get('login', 'RegistrationController@login')->name('login')->middleware('naming');
Route::get('loginCode', 'RegistrationController@loginCode');

// after login come to dashboard
/**
 *
 */
Route::get('dashboard', 'RegistrationController@dashboard');

//Add-category
Route::get('category5', 'CategoryController@Category')->name('category')->middleware('naming');
Route::get('CaregoryCode', 'CategoryController@CaregoryCode');

//fetch data
Route::get('showCategory', 'CategoryController@showCategory')->name('showCategory');

//posts
Route::get('post', 'PostController@FunctionNamePost')->name('post')->middleware('naming');
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

/****
 *  started blog
 */
Route::get('blog', 'BlogController@getBlog');
/**
 * Insert data in databse
 */
Route::post('list', 'BlogController@getdatablog');
/**
 * get all data in bloglist
 */
Route::get('blog_list', 'BlogController@getbloglist');
/***
 * Delete Blog
 */
Route::get('DeletePost/{id}', 'BlogController@deleteblog')->name('DeletePost');

/****
 * Edit blog data
 */

Route::get('Edit/{edit}', 'BlogController@editBlogDone');
Route::get('edit-blog/{id}', 'BlogController@editBlog')->name('editBlog');
Route::post('updateBlog', 'BlogController@updateBlog')->name('updateBlog');

/**
 * comment box in blog list   getCommentblog
 */
Route::get('comment', 'CommentController@viewComment')->name('comment');
/**
 * insert comment
 */
Route::get('commentInto', 'CommentController@getCommentblog')->name('commentInto');

/***
 * get all comment
 */
Route::get('Show_comment', 'CommentController@getAllCommentData');

/**
 *
 * fileupload
 */
Route::get('/uploadfile', 'uploadfileController@index');

Route::post('username', 'uploadfileController@upload');

//delete Image
Route::get('deleteImage/{id}', 'uploadfileController@deleteImage');

/**
 * Edit Images  editimage
 *
 */

Route::get('edit/{id}', 'uploadfileController@editimage');

Route::post('updateDetails', 'uploadfileController@updateDetails')->name('updateDetails')->middleware('naming');


/*--------Add-More-----------*/
Route::get('Add-more','AddController@addForm')->name('Add-more');
// Insert data in database
Route::post('saveData','AddController@saveData');