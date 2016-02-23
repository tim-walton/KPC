<?php
Route::group(['middleware' => ['web']], function () {



    Route::group(array('domain' => 'kpc.tdw.io'), function()
    {
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
        Route::get('/cbq/test', 'cbq@testCBQ', function(){

        });
        Route::get('/cbq/seed', 'cbq@seedCBQ', function(){

        });
    });

});
