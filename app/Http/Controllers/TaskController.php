<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = $request->get('per_page', 20);
        return Task::all()->forPage($page, $perPage);
    }

    public function store(StoreTaskRequest $request): void
    {
        $request->validated();
        $task = new Task([
            'name' => $request->post('name'),
            'description' => $request->post('description'),
            'status' => $request->post('status'),
        ]);
        $task->saveOrFail();
    }

    public function show(Task $task): Task
    {
        return $task;
    }

    public function update(UpdateTaskRequest $request, Task $task): void
    {
        $request->validated();
        $task->update([
            'name' => $request->post('name'),
            'description' => $request->post('description'),
            'status' => $request->post('status'),
        ]);
    }

    public function destroy(Task $task): void
    {
        $task->deleteOrFail();
    }
}
