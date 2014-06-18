@extends('layouts.users')

@section('content')
<h1>Create new user</h1>

    {{ Form::open(['route' => 'users.store', 'class' => 'form-horizontal']) }}
        <div class="form-group">
            {{ Form::label('username', 'Username: ', array('class' => 'col-sm-2 control-label')) }}
            <div class="col-sm-10">
                {{ Form::text('username') }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password: ', array('class' => 'col-sm-2 control-label')) }}
            <div class="col-sm-10">
                {{ Form::password('password') }}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-10">
                {{ Form::submit('Create user') }}
            </div>
        </div>
    {{ Form::close() }}

@stop
