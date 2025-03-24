<?php

namespace App\Http\Controllers;

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
}
