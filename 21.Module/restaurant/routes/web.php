<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/getdata', function () {
    
    #$result = select('SELECT * FROM ?',[`testtable`]);

    #return $result;
    #return view('contact');
});

Route::post('/addcontactdata', function (Request $request) {
    #return "Data Added";
    #return $request;
    return $request->name;
});


