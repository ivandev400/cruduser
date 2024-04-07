<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" type="text/css" href="{{asset('indexstyle.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('createuser.css')}}">
</head>
<body>
<!--
В целом нижняя часть является копипастой для edit.blade.php
Можно вынести в шаблон
-->
    <div class="container">
        <div class="header">
            <p>Create a User</p>
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
        <form method="post" action="{{route('user.store')}}">
        @csrf
        @method('post')
            <div class="name">
                <label for="name">Name</label>
                <input type="name" name="name">
            </div>
            <div class="email">
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>
            <div class="phone">
                <label for="name">Phone</label>
                <input type="tel" name="phone">
            </div>
            <div class="save-button">
                <input type="submit" value="Save a new User">
            </div>
        </form>
    </div>
</body>
</html>
