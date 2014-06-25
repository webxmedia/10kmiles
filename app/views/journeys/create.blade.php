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
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        {{ Form::label('end-date', 'End date: ', array('class' => 'control-label')) }}
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3">
                    <div class="form-group">
                        {{ Form::label('mileage', 'Mileage: ', array('class' => 'control-label')) }}
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-addon">Mi</span>
                        </div>
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
                        {{ Form::button('Save as template', array('class' => 'btn btn-info pull-right')) }}
                    </div>
                </div>
            </div>

            {{ Form::close() }}

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
