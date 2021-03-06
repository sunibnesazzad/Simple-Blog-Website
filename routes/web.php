<?php

Route::get('/','PostController@index')->name('home');
Route::get('/logout','SessionController@destroy');

//Category showing
Route::get('/category','CategoryController@index');
Route::get('/contact','PostController@contact');
//showing specific post
Route::get('/posts/{id}','PostController@show');

Route::post('/queries','PostController@query');

Route::group(['middleware' => 'guest'], function(){

    //login and register part
    Route::get('/login','SessionController@create');
    Route::post('/login','SessionController@store')->name('login');
    Route::get('/register','RegistrationController@create');
    Route::post('/register','RegistrationController@store');

// Password reset Routes
    Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset.token');
    Route::post('/password/reset', 'Auth\ResetPasswordController@reset');

    //Routes for google login
    Route::get('/auth/google', 'GoogleLoginController@redirect')->name('google.login');
    Route::get('auth/google/callback', 'GoogleLoginController@callback');

});
///using route middleware
Route::group(array('middleware' => 'auth'), function() {
    Route::group(array('middleware' => ['role:writer']), function() {

        //blog part
        Route::get('/post/create','PostController@create');
        //Updating post
        Route::get('/update/{id}','PostController@update');

        Route::Post('/updates/{id}','PostController@edit');

        //Deleting Post
        Route::get('/delete/{id}','PostController@delete');

        //soting post in database
        Route::post('/posts','PostController@store');
        //Category creating page
        Route::get('/category/create','CategoryController@create');
        //new Category saving in database
        Route::post('/category','CategoryController@store');
        //showinf category update page
        Route::get('/category/update/{id}','CategoryController@update');
        //Updating category
        Route::post('/category/update/{id}','CategoryController@edit');
        //deleting category
        Route::get('/category/delete/{id}','CategoryController@destroy');
        /*Showing all my Posts*/
        Route::get('/myposts/{id}','ProfileController@myposts');

    });

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
    /*showing my posts*/
    Route::get('/profile/{id}','ProfileController@show');
    /*Showing all my Posts*/


});