@extends('layout')


 @section('header')

     <header>
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-12">
                     <h1 class="logo">Projects Manager</h1>
                 </div>
                 <div class="col-lg-6 ">
                     <div class="head">
                         <h2 class="name">Projects List</h2>
                     </div>
                 </div>
                 <div class="col-lg-6 ">
                     <div class="head">
                         <h2 class="name">Tasks List</h2>
                    </div>
                 </div>
                <div class="col-lg-6">
                     <div class="errors">
                         @if ($errors->any())
                             <div class="alert alert-danger">
                                 <ul>
                                     @foreach($errors->all() as $error)
                                         <li class="errorlis">{{$error}}</li>
                                     @endforeach
                                 </ul>
                             </div>
                         @endif
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="errors">
                         @if ($errors->any())
                             <div class="alert alert-danger">
                                 <ul>
                                     @foreach($errors->all() as $error)
                                         <li class="errorlis">{{$error}}</li>
                                     @endforeach
                                 </ul>
                             </div>
                         @endif
                     </div>
                 </div>
            </div>
         </div>
     </header>
        @endsection

        @section('content')

        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
            <form action="{{route('project-form')}}" method="post">
                {{csrf_field()}}
            <div class="from-group enterdata" >
                <label for="project_name "><span class="projname">Enter project name</span></label>
                <div class="field">
                    <input type="text" name="project_name" id="project_name" class="form-control" placeholder="Enter project name">

                </div>
                <button type="submit" class="btn btn-success addproj">Add</button>
            </div>
            </form>
            </div>
            <div class="col-lg-6">
            <form action="{{route('task-form')}}" method="post">
                {{csrf_field()}}
            <div class="from-group enterdataproj" >
                <label for="task_name "><span class="taskname">Enter task name</span></label>
                <div class="field">
                    <input type="text" name="task_name" id="task_name" class="form-control" placeholder="Enter task name">
                </div>
                <div class="fieldcode">
                    <input type="number" name="code" id="code" class="form-control" placeholder="Enter code of project">
                </div>
                <button type="submit" class="btn btn-success add">Add</button>
            </div>
            </form>
            </div>
        </div>
        </div>

    <div class="container-fluid">
            <div class="row">
            <div class="col-lg-6">
                <table class="table table-striped table-hover ">
                    <thead class="background">
                    <tr>
                        <th><span class="tableheader">Current projects</span></th>
                        <th><span class="tableheader">Number</span></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projects as $project)
                        <tr>
                        <th>
                            {{$project -> project_name}}
                        </th>
                        <th>
                            <div class="code">
                                {{$project -> id}}
                            </div>

                        </th>
                        <th>

                        </th>
                            <th>
                                <div class="buttons">
                                    <button type="edit"  class="btn btn-warning"><a href="{{route('project-editor')}}">Edit</a> </button>
                                    <button type="delete" class="btn btn-danger"><a href="{{route('project-delete', $project-> id)}}">Delete</a></button>
                                    <button type="select" class="btn btn-success"><a href="{{route('project', $project-> id)}}">Select</a></button>
                                </div>
                            </th>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

                <div class="col-lg-6">
                    <table class="table table-striped table-hover ">
                        <thead class="background">
                        <tr>
                            <th><span class="tableheader">Current tasks</span></th>
                            <th><span class="tableheader">Code</span></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <th>
                                    {{$task -> task_name}}
                                </th>
                                <th>
                                    <div class="code">
                                        {{$task -> code}}
                                    </div>

                                </th>
                                <th>

                                </th>
                                <th>
                                    <div class="buttons">
                                        <button type="edit"  class="btn btn-warning"><a href="{{route('task-editor')}}">Edit</a> </button>
                                        <button type="delete" class="btn btn-danger"><a href="{{route('task-delete', $task-> id)}}">Delete</a></button>
                                    </div>
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
    </div>



@endsection

