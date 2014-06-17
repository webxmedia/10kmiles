@extends('layouts.users')

@section('content')
<h1>Create new user</h1>

    {{ Form::open(['route' => 'users.store']) }}
        <div>
            {{ Form::label('username', 'Username: ') }}
            {{ Form::text('username: ') }}
        </div>

        <div>
            {{ Form::label('password', 'Password: ') }}
            {{ Form::password('password: ') }}
        </div>

        <div>{{ Form::submit('Create user') }}</div>
    {{ Form::close() }}

@stop