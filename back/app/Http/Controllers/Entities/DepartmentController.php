<?php

namespace App\Http\Controllers\Entities;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentRequest;
use App\Models\DepartmentModel;
use Illuminate\Http\Response;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DepartmentModel::all();
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartmentRequest $request)
    {
        DepartmentModel::create($request->validated());
        return response()->json($request, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(DepartmentModel $department)
    {
        return $department;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DepartmentRequest $request, DepartmentModel $department)
    {
        $department->update($request->validated());
        return response()->json($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DepartmentModel $department)
    {
        $department->deleteOrFail();
        return response('',Response::HTTP_NO_CONTENT);
    }
}
