<?php
Route::group(['middleware' => ['web']], function () {
    Route::get('/kpc', function(){
        return view('kpc');
    });
    Route::get('/kpc/doctors', function(){
        return view('kpc-doctors');
    });
    Route::get('/cbq/test/1', 'cbq@testCBQ', function() {

    });
    Route::get('/cbq/test/1', 'cbq@seedCBQ', function() {

    });
});
