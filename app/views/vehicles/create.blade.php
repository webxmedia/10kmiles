@extends('layouts.users')

@section('content')
    <h1>Add vehicle</h1>
    <br />

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Add new vehicle to my account</h3>
        </div>
        <div class="panel-body">
            <br />
            {{ Form::open(['route' => 'vehicles.store', 'class' => 'form-horizontal']) }}
            <div class="form-group">
                {{ Form::label('make', 'Make: ', array('class' => 'col-sm-2 control-label')) }}
                <div class="col-sm-10">
                    {{ Form::text('make', null, array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('model', 'Model: ', array('class' => 'col-sm-2 control-label')) }}
                <div class="col-sm-10">
                    {{ Form::text('model', null, array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {{ Form::submit('Save vehicle', array('class' => 'btn btn-success')) }}
                </div>
            </div>
            {{ Form::close() }}

        </div>
    </div>

@stop
