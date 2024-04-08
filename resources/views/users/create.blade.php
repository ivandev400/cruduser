@extends('users/formLayout')

@section('title', 'Create User')

@section('header', 'Create a User')

@section('content')
    <form method="post" action="{{route('user.store')}}">
        @csrf
        @include('users/formFields')
        <div class="save-button">
            <input type="submit" value="Save a new User">
        </div>
    </form>
@endsection