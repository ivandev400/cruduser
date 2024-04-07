<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRUD User Application</title>
    <link rel="stylesheet" type="text/css" href="{{asset('pagination.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('indexstyle.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <h1>This is CRUD user application</h1>
    <div>
        <table>
            <tr>
                <th class="idhead">ID</th>
                <th class="namehead">Name</th>
                <th class="emailhead">Email</th>
                <th class="phonehead">Phone</th>
                
            </tr>
            @foreach($users as $user)
                <tr>
                    <td class="idrow">{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td class="edit-link">
                        <a href="{{route('user.edit', ['user'=> $user])}}">Edit</a>
                    </td>
                    <td class="delete-button">
                        <form method="post" action="{{route('user.destroy', ['user'=> $user])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="delete-button" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="create-user">
            <a href="{{route('user.create')}}">Create a new User</a>
        </div>
        <div style="margin: 0 auto;">
            {{$users->links()}}
        </div>
    </div>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
</body>
</html>