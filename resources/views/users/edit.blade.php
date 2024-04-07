<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" type="text/css" href="{{asset('indexstyle.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('edituser.css')}}">
</head>
<body>
    <div class="container">
        <div class="header">
                <p>Edit a User</p>
            </div>
        <div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <form method="post" action="{{route('user.update', ['user'=>     $user])}}">
        @csrf
        @method('put')
            <div class="name">
                <label for="name">Name</label>
                <input type="name" name="name" value="{{$user->name}}">
            </div>
            <div class="email">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{$user->email}}">
            </div>
            <div class="phone">
                <label for="name">Phone</label>
                <input type="tel" name="phone" value="{{$user->phone}}">
            </div>
            <div class="save-button">
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
</body>
</html>