<?php

namespace App\Http\Controllers;
use App;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use App\Http\Requests\TasksRequest;
use App\Task;
use Illuminate\View\View;


class TasksController extends Controller {

    public function index(){
        $tasks = App\Task::all();
        $projects = App\Project::all();

        return view('index') ->with([
            'tasks'=>$tasks,
            'projects' => $projects
        ]);

    }

    public function sub(TasksRequest $req){

        $task = new Task();
        $task -> task_name = $req->input('task_name');
        $task -> code = $req ->input('code');

        $task -> save();

        return redirect() -> route('home');
    }


    public function edit($id, TasksRequest $req){
        $task =  Task::find($id);
        $task -> task_name = $req->input('task_name');


        $task -> save();

        return redirect() ->route('home');
    }

    public function del($id){
        Task::find($id) -> delete();

        return redirect() -> route('home');

    }





}
