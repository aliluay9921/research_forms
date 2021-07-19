<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

route::post('register', [\App\Http\Controllers\UserController::class, 'register']);
route::post('login', [\App\Http\Controllers\UserController::class, 'login']);
route::middleware(['auth:api'])->group(function () {

    route::get('get_auth_search', [\App\Http\Controllers\SearchController::class, 'getSearchAuth']);
    route::get('get_all_searchs', [\App\Http\Controllers\SearchController::class, 'getAllSearch']);
    route::get('get_feedback', [\App\Http\Controllers\SearchController::class, 'getFeedback']);
    route::post('feedback_admins', [\App\Http\Controllers\SearchController::class, 'feedbackAdmins']);
    route::post('upload_search', [\App\Http\Controllers\SearchController::class, 'uploadSearch']);
    Route::get('download', [App\Http\Controllers\SearchController::class, 'download']);
});