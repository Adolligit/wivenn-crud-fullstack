<?php

use App\Http\Controllers\Entities\DepartmentController;
use App\Http\Controllers\Entities\EmployeeController;
use App\Http\Controllers\Entities\TaskController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function() {
    Route::apiResource('employee', EmployeeController::class);
    Route::apiResource('department', DepartmentController::class);
    Route::apiResource('task', TaskController::class);
});