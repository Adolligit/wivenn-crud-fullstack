<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function() {
    Route::group(['prefix' => 'department'], base_path('routes/v1/DepartmentRoutes.php'));
    Route::group(['prefix' => 'employee'], base_path('routes/v1/EmployeeRoutes.php'));
    Route::group(['prefix' => 'task'], base_path('routes/v1/TaskRoutes.php'));
});