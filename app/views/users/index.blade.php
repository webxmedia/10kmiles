@extends('layouts.default')

@section('content')
    <h1>All users</h1>

    @foreach $users as $user

        <li>{{ $user->username }}</li>

    @endforeach

@stop