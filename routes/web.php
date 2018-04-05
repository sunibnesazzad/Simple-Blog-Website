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

//authentication section

Route::get('/login','SessionController@create');
Route::post('/login','SessionController@store')->name('login');
Route::get('/register','RegistrationController@create');

Route::post('/register','RegistrationController@store');

Route::get('/logout','SessionController@destroy');
Route::get('/contact',function () {
    return view('contact');
});


// end  authentications


Route::get('/','PostController@index')->name('home');

Route::get('/posts/create','PostController@create');

//showing specific post
Route::get('/posts/{id}','PostController@show');
//Updating post
Route::get('/update/{id}','PostController@update');

Route::Post('/updates/{id}','PostController@edit');

//Deleting Post
Route::get('/delete/{id}','PostController@delete');

//soting post in database
Route::post('/posts','PostController@store');

                 //Category section
/*//Category showing
Route::get('/category','CategoryController@index');
//Category creating page
Route::get('/category/create','CategoryController@create');
//new Category saving in database
Route::post('/category','CategoryController@store');
//showinf category update page
Route::get('/update/{id}','CategoryController@update');
//Updating category
Route::post('/update/{id}','CategoryController@edit');
//deleting category
Route::get('/delete/{id}','CategoryController@destroy');*/


//Category showing
Route::get('/category','CategoryController@index');

///using route middleware
Route::group(array('middleware' => 'auth'), function() {
    Route::group(array('middleware' => ['role:writer']), function() {


        //Category creating page
        Route::get('/category/create','CategoryController@create');
        //new Category saving in database
        Route::post('/category','CategoryController@store');
        //showinf category update page
        Route::get('/update/{id}','CategoryController@update');
        //Updating category
        Route::post('/update/{id}','CategoryController@edit');
        //deleting category
        Route::get('/delete/{id}','CategoryController@destroy');

        //blog part
        Route::get('/posts/create','PostController@create');


        //Updating post
        Route::get('/update/{id}','PostController@update');

        Route::Post('/updates/{id}','PostController@edit');

        //Deleting Post
        Route::get('/delete/{id}','PostController@delete');

        //soting post in database
        Route::post('/posts','PostController@store');



    });

    //showing specific post
    Route::get('/posts/{id}','PostController@show');
    //commenting on a post
    Route::post('/posts/{post}/comments','CommentsController@store');


    //showing profile
    Route::get('/profile','ProfileController@create');
    //showing Edit profile page
    Route::get('/edit_profile','ProfileController@update');
    //editing profile
    Route::post('/edit/{id}','ProfileController@edit');
    //showing normal users authers profile
    Route::get('/profile/{id}','ProfileController@show');

    Route::get('/dash/{id}','DashController@create')->name('dash');


});