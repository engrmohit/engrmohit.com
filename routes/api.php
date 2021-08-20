<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\ProjectsController;

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

Route::name('api.')->group(function() {
    // Route::apiResource('projects', ProjectsController::class);

    Route::get('/projects', [ProjectsController::class, 'index'])->name('projects.index');
    Route::get('/projects/{project:slug}', [ProjectsController::class, 'show'])->name('projects.show');
});
