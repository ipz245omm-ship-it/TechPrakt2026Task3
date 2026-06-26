<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnswerController;

Route::get('/answers', [AnswerController::class, 'index']);
Route::post('/answers', [AnswerController::class, 'store']);
Route::patch('/answers/{id}', [AnswerController::class, 'update']);
Route::delete('/answers/{id}', [AnswerController::class, 'destroy']);