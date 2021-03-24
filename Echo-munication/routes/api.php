<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TutorialController;

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

Route::get("/auth", [AuthController::class, "index"]);

//API ROUTE CATEGORY
Route::middleware('api')->group(function () {
    Route::resource('categories', CategoryController::class);
});

//API ROUTE LAST 5 TUTORIALS, TUTORIALS BY CATEGORY, TUTORIAL BY ID
Route::middleware('api')->group(function () {
    Route::resource('tutorials', TutorialController::class);
    Route::resource('categories', CategoryController::class);
    Route::get('category/{id}/tutorials', [TutorialController::class, 'categorytutorials'])->name('categorytutorials');
    Route::get('tutorials', [TutorialController::class, 'last5'])->name('last5');


});