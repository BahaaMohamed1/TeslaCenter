<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// public Routes
Route::post('register','StudentAuthController@register');
Route::post('login','StudentAuthController@login');


//student Routes

Route::middleware('auth:sanctum')->group(function (){
    Route::post('logout','StudentAuthController@logout');
});

Route::middleware('auth:student-api')->group(function (){
});



