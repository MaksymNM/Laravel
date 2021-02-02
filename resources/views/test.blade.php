<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    

    <title>Test</title>

</head>
<body>
<h1>Формы</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{route('task-editor')}}" method="post">
    {{csrf_field()}}
    <div class="from-group">
        <label for="name">Введите имя</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Ok</button>
    <button type="submit" class="btn btn-warning">Cancel</button>
</form>


</body>
</html>



