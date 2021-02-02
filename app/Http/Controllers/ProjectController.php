<?php

namespace App\Http\Controllers;
use App;
use App\Http\Requests\ProjectRequest;
use App\Project;
use App\Task;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function newproject(ProjectRequest $req)
    {

        $project = new Project();
        $project->project_name = $req->input('project_name');


        $project->save();

        return redirect()->route('home');

    }

    public function edite($id, ProjectRequest $req){
        $project =  Project::find($id);
        $project -> project_name = $req->input('project_name');


        $project -> save();

        return redirect() ->route('home');
    }

    public function delete($id)
    {
        Project::find($id)->delete();

        return redirect()->route('home');
    }
}
