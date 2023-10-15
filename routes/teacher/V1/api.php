<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// public Routes
Route::post('register','TeacherAuthController@register');
Route::post('login','TeacherAuthController@login');


//student Routes

Route::middleware('auth:teacher-api')->group(function (){

});



