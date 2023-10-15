<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('specializations',[\App\Http\Controllers\general\SpecializationController::class,'index']);
Route::get('grades',[\App\Http\Controllers\general\GradesController::class,'index']);
Route::get('grades/{specialization}',[\App\Http\Controllers\general\GradesController::class,'gradesFromSpecialization']);


