<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

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

    public function add(Request $request) {

        $taskInput = new Task();
        $taskInput->name = $request->all()['name'];
        $taskInput->description = $request->all()['description'];
        $taskInput->save();

        $tasks = Task::all();
        return view('task', ['tasks' => $tasks]);
    }
}
