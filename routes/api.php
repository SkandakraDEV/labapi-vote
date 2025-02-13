<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\VoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('/v1')->group(function(){
    Route::post('/signin', [AuthController::class, 'signin']);
    Route::middleware('auth:sanctum')->group(function(){
        Route::get('/user', [AuthController::class, 'getUser']);
        Route::post('/signout', [AuthController::class, 'signout']);
        Route::get('/votes', [VoteController::class, 'getActiveVoteSession']);
        Route::get('/vote/{id}', [VoteController::class, 'chooseVotingCandidate']);
        Route::get('/choose/{id}/vote/{user_id}/user', [VoteController::class, 'chooseCandidate']);
    });
});
