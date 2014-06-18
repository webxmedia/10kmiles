@extends('layouts.default')

@section('content')
    <h1>My vehicles</h1>

    <table class="table table-striped table-hover">
        <tr>
            <th>&nbsp;</td>
            <th>Make</td>
            <th>Model</td>
            <th>Fuel</td>
            <th>&nbsp;</td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td><img src="http://placehold.it/25x25" alt="..." class="img-rounded"></td>
                <td>{{ $user->username }}</td>
                <td>Petrol}</td>
                <td>
                    <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>&nbsp;
                    <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
                </td>
            </tr>
        @endforeach
    </table>

@stop