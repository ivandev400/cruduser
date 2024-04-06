<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit a User</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('user.update', ['user'=> $user])}}">
    @csrf
    @method('put')
        <div>
            <label for="name">Name</label>
            <input type="name" name="name" value="{{$user->name}}">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" value="{{$user->email}}">
        </div>
        <div>
            <label for="name">Phone</label>
            <input type="tel" name="phone" value="{{$user->phone}}">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>