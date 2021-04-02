<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\controllers\StudController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//add user
Route::post('add',[StudController::class,'addUser']);
//Get specfic user 
Route::get('user/{id}',[StudController::class,'searchUserById']);
//update user 
Route::put('update/{id}',[StudController::class,'updateUser']);
//delete user 
Route::delete('delete/{id}',[StudController::class,'deleteUser']);