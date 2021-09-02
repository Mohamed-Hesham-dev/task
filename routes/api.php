<?php

use App\Http\Controllers\API\CompanyController;
use App\Http\Controllers\API\EmployeeController;
use App\Http\Controllers\API\LoginController;
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

Route::post('login', [LoginController::class, 'login']);
     
Route::middleware('auth:api')->group( function () {
    Route::apiResource('companies', CompanyController::class);
    Route::apiResource('employees', EmployeeController::class);
});