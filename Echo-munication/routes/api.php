<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TutorialController;
=======
use App\Models\TestApiController; 
>>>>>>> Chris


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
Route::resource('tests', TestController::class);
<<<<<<< HEAD

//API ROUTE CATEGORY
Route::middleware('api')->group(function () {
    Route::resource('categories', CategoryController::class);
});

//API ROUTE LAST 5 TUTORIALS
Route::middleware('api')->group(function () {
    Route::resource('tutorials', TutorialController::class);
});
=======
>>>>>>> Chris
