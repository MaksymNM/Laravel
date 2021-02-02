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

<table class="table table-striped table-hover ">
    <thead class="background">
    <tr>
    </tr>
    </thead>
    <tbody>

    @foreach($projects as $project)
        <tr>
            <th>
                {{$project -> project_name}}
                <button type="edit"  class="btn btn-warning"><a href="{{route('project', $project -> id)}}">Select</a> </button>
            </th>
        </tr>
    @endforeach

    </tbody>
</table>
</body>
</html>
