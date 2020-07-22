<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('sms');
});

Route::post('/sms/send','SmsController@smssend');

