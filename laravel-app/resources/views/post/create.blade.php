
<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5.8 Form Request Validation Application - bishrulhaq.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


<form action="{{url('api/post')}}" method="post">
    @csrf
    başlık: <input type="text" name="name" /><br>
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    içerik :<input type="text" name="email" /><br>
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    slug :<input type="text" name="slug" /><br>
    @error('slug')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="submit">
</form>


@if (count($errors) > 0)
<h1>Create Post</h1>

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


</body>
</html>