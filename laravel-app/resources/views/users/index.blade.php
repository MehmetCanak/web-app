<form action="{{ route('users.search') }}" method="POST">
@csrf
    <div class="form-group">
        <input id="user_id" class="form-control" name="user_id" type="text" value="{{ old('user_id') }}" placeholder="User ID">
    </div>
    <input class="btn btn-info" type="submit" value="Search">
</form>


@foreach ($users as $user)
    <p>This is user {{ $user->name }}</p>
@endforeach

{{ $user3->name }}
{{ $email }}