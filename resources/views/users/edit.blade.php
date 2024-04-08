@extends('users/formLayout')

@section('title', 'Edit User')

@section('header', 'Edit a User')

@section('content')
    <form method="post" action="{{route('user.update', ['user'=>$user])}}">
        @csrf
        @method('put')
        @include('users/formFields')
        <div class="save-button">
            <input type="submit" value="Update">
        </div>
    </form>
@endsection