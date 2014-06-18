@extends('layouts.users')

@section('content')
    <h1>Create new account</h1>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">

            {{ Form::open(['route' => 'users.store', 'class' => 'form-horizontal']) }}
            <div class="form-group">
                {{ Form::label('username', 'Username: ', array('class' => 'col-sm-2 control-label')) }}
                <div class="col-sm-10">
                    {{ Form::text('username', null, array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('password', 'Password: ', array('class' => 'col-sm-2 control-label')) }}
                <div class="col-sm-10">
                    {{ Form::password('password', array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {{ Form::submit('Create account', array('class' => 'btn btn-primary')) }}
                </div>
            </div>
            {{ Form::close() }}

        </div>
    </div>

@stop
