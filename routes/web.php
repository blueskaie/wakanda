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

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/users/delete/{id}', 'Admin\UsersController@delete')->name('userdelete');

Route::group(['prefix'=>'admin'], function(){
    Route::get('', 'Admin\IndexController@index')->name('admin');
    // Dashboard
    Route::get('dashboard', 'Admin\DashboardController@index')->name('admindashboard');
    // UsersDashboard
    Route::get('usersboard', 'Admin\UsersController@index')->name('usersboard');

    // PostsDashboard
    // Route::get('postspannel', 'Admin\PostController@dashboard');
    // Route::get('ajax-pagination','Admin\PostController@ajaxPagination')->name('ajax.pagination');
    Route::resource('posts', 'Admin\PostController');
});


Route::resource('posts', 'PostController');
Route::resource('comments', 'CommentController');
// Route::get('ajaxposts/repyform', 'PostController@ajaxreplyform');


