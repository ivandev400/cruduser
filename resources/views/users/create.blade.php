<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    <h1>Create a User</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('user.store')}}">
    @csrf
    @method('post')
        <div>
            <label for="name">Name</label>
            <input type="name" name="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="name">Phone</label>
            <input type="tel" name="phone">
        </div>
        <div>
            <input type="submit" value="Save a new User">
        </div>
    </form>
</body>
</html>