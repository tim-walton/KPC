<?php
Route::group(['middleware' => ['web']], function () {
    Route::get('/kpc', function(){
        return view('kpc');
    });
    Route::get('/kpc/doctors', function(){
        return view('kpc-doctors');
    });

    Route::get('/weatherapi/v1', function(){

    });
});
