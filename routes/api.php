<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\RequirementController;
use App\Models\Category;
use App\Models\Requirement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('facilities', FacilityController::class);
// Route::get('/facilities', [FacilityController::class,'index']);
// Route::post('/facilities', [FacilityController::class,'store']);
// Route::get('/facilities/{facility}', [FacilityController::class,'show']);


//route for categories
Route::resource('categories', CategoryController::class);


//route for requirement
Route::resource('requirements', RequirementController::class);

    