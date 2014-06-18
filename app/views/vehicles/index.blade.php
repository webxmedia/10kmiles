@extends('layouts.default')

@section('content')
    <h1>My vehicles</h1>

    @foreach ($users as $user)
        <li>{{ $user->username }}</li>
    @endforeach

@stop