<?php
Route::group(['middleware' => ['web']], function () {
    Route::get('/kpc', function(){

    });


    Route::group(array('domain' => 'kpc.tdw.io'), function()
    {
        Route::get('/home', function()
        {
            return view('kpc');
        });

        Route::get('/doctors', function(){
            return view('kpc-doctors');
        });
    });

});
