<?php
Route::group(['middleware' => ['web']], function () {

    Route::group(array('domain' => 'kpc.tdw.io'), function()
    {

        Route::get('/login', 'Auth\AuthController@getLogin');
        Route::post('/login', 'Auth\AuthController@postLogin');
        Route::get('/logout', 'Auth\AuthController@getLogout');

        Route::get('/register', 'Auth\AuthController@getRegister');
        Route::post('/register', 'Auth\AuthController@postRegister');
        Route::get('/home', function()
        {
            return view('kpc');
        });

        Route::get('/doctors', function(){
            return view('kpc-doctors');
        });

        Route::get('/about', function(){
            return view('about');
        });
        Route::get('/insurers', function(){
            return view('insurers');
        });
        Route::get('/login', function(){
            return view('login');
        });

    });

});
