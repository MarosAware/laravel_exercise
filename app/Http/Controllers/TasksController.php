<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    //Argument need to be named as slug in the router, thats why $task
    public function show(Task $task)
    {
        //$task = DB::table('tasks')->find($id);
//        $task = Task::find($id);

//        return $task;

        return view('tasks.show', compact('task'));
    }

}
