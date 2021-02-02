@extends('layout')


@section('header')

    <header>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6  ">

                    <div class="head">
                        <h2 class="name">Tasks List</h2>
                    </div>

                    <div class="errors">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
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
        <div class="row justify-content-center">
            <div class="col-lg-6">

                <table class="table table-striped table-hover ">
                    <thead class="background">
                    <tr>
                        <th><span class="tableheader">Current tasks</span></th>
                    </tr>


                    </thead>
                    <tbody>

                    @foreach($projects as $item)
                        <tr >

                            <th >
                                <form action="{{route('prjct-editor', $item->id)}}" method="post">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-lg-4">
                                            {{$item -> project_name}}
                                        </div>

                                        <div class="col-lg-8">
                                            <input type="text" name="project_name" id="project_name" class="form-control">
                                            <div class="buttons">
                                                <button type="edite"  class="btn btn-warning">Save </button>
                                                <button type="delete" class="btn btn-danger"><a href="{{route('home')}}">Cancel</a></button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </th>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>



@endsection


