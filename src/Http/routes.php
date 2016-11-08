<?php
Route::group(['middleware' => ['web','auth']], function () {
    Route::get('/dashboard', function() {
        return view('jupiter::dashboard');
    });
});