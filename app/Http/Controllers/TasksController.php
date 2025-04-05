<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TaskManager;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        $tasks = TaskManager::all();
        return view('index', compact('tasks'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $validatedData = request()->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'completed' => 'required|boolean',
        ]);
        $validatedData['completed'] = $request->has('completed');
        TaskManager::create($validatedData);
        return redirect('/tasks')->with('completed', 'Task created!');
    }
    public function show($id){
       $task = TaskManager::find($id);
       return view('show', compact('task'));
    }
    public function edit($id){
        $task = TaskManager::find($id);
        return view('edit', compact('task'));
    }
    public function update(Request $request, $id){
        $task = TaskManager::find($id);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'completed' => 'boolean',
        ]);
        $validatedData['completed'] = $request->has('completed');
        $task->update($validatedData);
        return redirect('/tasks')->with('completed', 'Task updated!');
    }
    public function destroy($id)
    {
        $task = TaskManager::find($id);
        if (!$task) {
            return redirect('/tasks')->with('error', 'Task not found!');
        }
        $task->delete();
        return redirect('/tasks')->with('completed', 'Task deleted!');
    }
}
