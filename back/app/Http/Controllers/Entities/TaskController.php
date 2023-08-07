<?php

namespace App\Http\Controllers\Entities;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Http\Requests\TaskRequest;
use Illuminate\Http\Response;

class TaskController extends Controller
{
    /**
    * Display a listing of the resource.
    */
   public function index()
   {
       return Task::all();
   }
   
   /**
    * Store a newly created resource in storage.
    */
   public function store(TaskRequest $request)
   {
       Task::create($request->validated());
       return response()->json($request, Response::HTTP_CREATED);
   }

   /**
    * Display the specified resource.
    */
   public function show(Task $task)
   {
       return $task;
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(TaskRequest $request, Task $task)
   {
       $task->update($request->validated());
       return response()->json($request);
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(Task $task)
   {
       $task->deleteOrFail();
       return response('',Response::HTTP_NO_CONTENT);
   }
}
