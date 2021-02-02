<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Test</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/cover.css')}}">
</head>
<body>

<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-lg-6">

<table class="table table-striped table-hover ">
    <thead class="background">

    <tr>
        <th><span class="tableheader">Current tasks of project</span></th>
        <th><span class="tableheader">Code</span></th>

    </tr>
    </thead>
    <tbody>
    @foreach($projects as $task)
        <tr>
            <th>
                {{$task -> task_name}}
            </th>
            <th>
                {{$task -> code}}
            </th>

        </tr>
    @endforeach
    </tbody>
</table>
    <center>
        <button type="back"  class="btn  btn-warning btnhome"><a href="{{route('home')}}">Back</a> </button>
    </center>



</div>
</div>
</div>

</body>
</html>

