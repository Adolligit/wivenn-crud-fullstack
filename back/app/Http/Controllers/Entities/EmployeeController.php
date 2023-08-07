<?php

namespace App\Http\Controllers\Entities;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Http\Requests\EmployeeRequest;
use Illuminate\Http\Response;

class EmployeeController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Employee::all();
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        Employee::create($request->validated());
        return response()->json($request, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return $employee;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->validated());
        return response()->json($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->deleteOrFail();
        return response('',Response::HTTP_NO_CONTENT);
    }
}
