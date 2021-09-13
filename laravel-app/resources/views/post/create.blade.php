<form action="{{url('api/post')}}" method="post">
    @csrf
    başlık: <input type="text" name="title" /><br>
    içerik :<input type="text" name="body" /><br>
    <input type="submit">
</form>


<h1>Create Post</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


