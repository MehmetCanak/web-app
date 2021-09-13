<form action="{{url('api/post')}}" method="post">
    @csrf
    başlık: <input type="text" name="name" /><br>
    içerik :<input type="text" name="email" /><br>
    slug :<input type="text" name="slug" /><br>
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


