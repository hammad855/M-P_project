<?php

use App\Http\Controllers\CostCalculatorController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\JobPortal\DepartmentController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getBranches', [CostCalculatorController::class, 'getBranches']);
Route::post('/calculateCost', [CostCalculatorController::class, 'costCalculate']);
Route::get('/track/{id}', [TrackingController::class, 'trackConsignment']);
Route::post('/addQuote', [FormsController::class, 'quoteForm']);
Route::post('/pickupRequest', [FormsController::class, 'pickupRequest']);


Route::post('/addDepartment', [DepartmentController::class, 'addDepartment']);
Route::get('/getDepartments', [DepartmentController::class, 'getDepartments']);
Route::post('/editDepartment/{id}', [DepartmentController::class, 'editDepartments']);
Route::post('/deleteDepartment/{id}', [DepartmentController::class, 'deleteDepartments']);

Route::post('/createUser', [UserController::class, 'createUser']);
Route::get('/getUsers', [UserController::class, 'getUsers']);
Route::get('/deleteUser/{id}', [UserController::class, 'deleteUser']);
Route::get('/getRoles', [UserController::class, 'getRoles']);
Route::get('/assignRole/{id}/{userId}', [UserController::class, 'assignRole']);