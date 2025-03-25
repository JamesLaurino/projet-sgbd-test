<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return view('task', ['tasks' => $tasks]);
    }

    public function getById($id) {
        $task = Task::findOrFail($id);
        return view('task-detail', ['task' => $task]);
    }

    public function form() {
        return view('task-form');
    }

    public function delete($id) {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route("task.index");
    }

    public function add(TaskRequest $request) {
        Task::create($request->validated());
        return redirect()->route("task.index")->with("success", "La taskée a été sauvegardée");
    }
}
