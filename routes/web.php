<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'TasksController@index')
-> name('home');



Route::post('/task/add', 'TasksController@sub') -> name('task-form');

Route::post('/project/add', 'ProjectController@newproject') -> name('project-form');

Route::get('/task/edit', function (){
    $task = App\Task::all();
    return view('editor', compact('task'));
}) -> name('task-editor');

Route::get('/projects/edit', function (){
    $projects = App\Project::all();
    return view('project_editor', compact('projects'));
}) -> name('project-editor');

Route::post('/task/{task}', 'TasksController@edit') -> name('editor');

Route::post('/project/{project}', 'ProjectController@edite') -> name('prjct-editor');


Route::get('/task/del/{id}', 'TasksController@del') -> name('task-delete');

Route::get('/project/del/{id}', 'ProjectController@delete') -> name('project-delete');


Route::get('/projects/project/{code}', function ($code){
    $projects = DB::table('tasks')
        ->join('projects', 'tasks.code', '=', 'projects.id')
        ->where('code', '=', $code)
        ->get(array('tasks.task_name', 'tasks.code', 'projects.project_name'));
    return view('tasks_of_project', compact('projects'));
}) ->name('project');






//Route::post('task/edit', 'TasksController@Edit') -> name('task-editor');