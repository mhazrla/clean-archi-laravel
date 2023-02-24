<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee/{employee}', [EmployeeController::class, 'getEmployeeById']);
Route::post('/employee', [EmployeeController::class, 'store']);
Route::put('/employee/{employee}', [EmployeeController::class, 'update']);
Route::delete('/employee/{employee}', [EmployeeController::class, 'destroy']);
