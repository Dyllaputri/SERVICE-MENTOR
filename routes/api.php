<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MentorController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('mentors', [MentorController::class, 'index']);
Route::post('mentor', [MentorController::class, 'store']);
Route::get('mentor/{id}', [MentorController::class, 'show']);
Route::put('mentor/{id}', [MentorController::class, 'update']);
Route::delete('mentor/{id}', [MentorController::class, 'destroy']);
