@extends('layouts.default')

@section('content')
    <h1>My vehicles</h1>

    <table class="table table-striped table-hover">
        <tr>
            <th>Make</td>
            <th>Model</td>
            <th>&nbsp;</td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->username }}</td>
                <td><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button> <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
            </tr>
        @endforeach
    </table>

@stop