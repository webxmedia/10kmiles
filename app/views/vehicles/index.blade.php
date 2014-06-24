@extends('layouts.default')

@section('content')
    <h1>My vehicles</h1>

    <table class="table table-striped table-hover">
        <tr>
            <th style="width: 30px;">&nbsp;</th>
            <th>Make</th>
            <th>Model</th>
            <th>Fuel</th>
            <th>Mileage</th>
            <th>Cost</th>
            <th style="width: 130px;">&nbsp;</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td style="vertical-align:middle;"><img src="http://placehold.it/25x25" alt="..." class="img-rounded"></td>
                <td style="vertical-align:middle;">{{ $user->username }}</td>
                <td style="vertical-align:middle;">{{ $user->username }}</td>
                <td style="vertical-align:middle;">Petrol</td>
                <td style="vertical-align:middle;">69,501</td>
                <td style="vertical-align:middle;">£10,000</td>
                <td style="vertical-align:middle;">
                    <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>&nbsp;
                    <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-minus-circle"></i></button>&nbsp;
                    <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
                </td>
            </tr>
        @endforeach
    </table>

@stop