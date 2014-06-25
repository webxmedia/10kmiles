@extends('layouts.users')

@section('content')
    <h1>Record Journey</h1>
    <br />

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Enter a new journey</h3>
        </div>
        <div class="panel-body">
            <br />
            {{ Form::open(['route' => 'vehicles.store', 'class' => '']) }}
            <div class="form-group">
                {{ Form::label('vehicle', 'Vehicle: ', array('class' => 'col-sm-2 control-label')) }}
                <div class="col-sm-10">
                    <select class="form-control">
                        <option>Astra</option>
                        <option>BMW</option>
                        <option>Audi</option>
                        <option>Jaguar</option>
                        <option>Ford</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('driver', 'Driver: ', array('class' => 'col-sm-2 control-label')) }}
                <div class="col-sm-10">
                    <select class="form-control">
                        <option>Matt</option>
                        <option>Mark</option>
                        <option>Phil</option>
                        <option>Cesc</option>
                        <option>Jo</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('journey', 'Journey: ', array('class' => 'col-sm-2 control-label')) }}
                <div class="col-sm-10">
                    {{ Form::text('journey', null, array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('start-date', 'Start date: ', array('class' => 'col-sm-2 control-label')) }}
                <div class="col-sm-10">
                    {{ Form::text('start-date', null, array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('end-date', 'End date: ', array('class' => 'col-sm-2 control-label')) }}
                <div class="col-sm-10">
                    {{ Form::text('end-date', null, array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            Return journey
                        </label>
                    </div>
                </div>
            </div>


            {{ Form::close() }}

            <div class="row">
                <div class="col-xs-3">
                    {{ Form::label('vehicle', 'Vehicle: ', array('class' => 'control-label')) }}
                    <select class="form-control">
                        <option>Astra</option>
                        <option>BMW</option>
                        <option>Audi</option>
                        <option>Jaguar</option>
                        <option>Ford</option>
                    </select>
                </div>
                <div class="col-xs-3">
                    {{ Form::label('driver', 'Driver: ', array('class' => 'control-label')) }}
                    <select class="form-control">
                        <option>Matt</option>
                        <option>Mark</option>
                        <option>Phil</option>
                        <option>Cesc</option>
                        <option>Jo</option>
                    </select>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        {{ Form::label('start-date', 'Start date: ', array('class' => 'control-label')) }}
                        {{ Form::text('start-date', null, array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        {{ Form::label('end-date', 'End date: ', array('class' => 'control-label')) }}
                        {{ Form::text('end-date', null, array('class' => 'form-control')) }}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3">
                    <div class="form-group">
                        {{ Form::label('mileage', 'Mileage: ', array('class' => 'control-label')) }}
                        {{ Form::text('mileage', null, array('class' => 'form-control')) }}
                        <div style="height: 5px;"></div>
                        <label>
                            <input type="checkbox" value=""> Return journey
                        </label>
                    </div>
                </div>
                <div class="col-xs-9">
                    <div class="form-group">
                        {{ Form::label('journey', 'Journey: ', array('class' => 'control-label')) }}
                        {{ Form::text('journey', null, array('class' => 'form-control')) }}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        {{ Form::submit('Save journey', array('class' => 'btn btn-success')) }}
                        {{ Form::button('Save as template', array('class' => 'btn btn-info')) }}
                    </div>
                </div>
            </div>

        </div>
    </div>

@stop



car
driver
journey
start date
end date
return
comments
