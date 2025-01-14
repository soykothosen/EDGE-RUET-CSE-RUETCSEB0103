<?php

#use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    
    #$result = DB::select( DB::raw("SELECT * FROM some_table WHERE some_col = '$someVariable'") );

    $result = DB::select(("SELECT * FROM `testtable`") );
    return $result[0]->name;
    #return view('contact');
});

Route::post('/addcontactdata', function (Request $request) {
    #return "Data Added";
    return $request;
    #return $request->name;
});

Route::get('/form', function () {
    return view('form');
    #return 'Form Page';
});

Route::post('/formdata', function (Request $request) {
    
    return $request;
});

Route::get('/getSocialMediaLink', function () {

    $result = DB::select(("SELECT * FROM `sociallink`") );
    #$result = DB::select(("SELECT * FROM `sociallink` WHERE id = 2") );
    #return $result[0]->name;
    return $result[1]->link;
    #return 'All Link of Social Media';
});


