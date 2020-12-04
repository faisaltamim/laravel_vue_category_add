<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get( '/{any?}', function () {
    return view( 'app' );
} );
Route::get( '/category/create-new{any?}', function () {
    return view( 'app' );
} );

Auth::routes();

Route::get( '/home', 'HomeController@index' )->name( 'home' );

// category resource router in below
Route::resource( 'category', 'CategoryController' );
