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

    }
    public function edit($id){

    }
    public function update(Request $request, $id){

    }
    public function destroy($id){

    }

}
