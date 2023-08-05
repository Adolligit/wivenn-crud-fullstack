<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/coisa', function (Request $request) {
    return 'Test';
});

Route::get('/greeting', function () {
    return 'Hello World';
});