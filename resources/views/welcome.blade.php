<!DOCTYPE html>
<html>
<head>
    <title>text</title>
</head>
<body>
    <h2>Input name</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method ="POST" action = "{{url('home')}}">
        {{ csrf_field()}}
        <h2>name</h2>
        <input type="text" name="name" value="{{old('name')}}">
        <h2>age</h2>
        <input type="number" name="age" value="{{old('age')}}"> <br><br>
        <input type="submit" name="submit">
        </form>
</body>
</html>