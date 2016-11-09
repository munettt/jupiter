<?php
Route::group(['middleware' => ['web']], function () {
    Route::get('/dashboard', function() {
        return view('jupiter::dashboard');
    });
});