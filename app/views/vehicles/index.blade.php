@extends('layouts.default')

@section('content')
    <h1>My vehicles</h1>

    <table class="table table-striped table-hover">
        <tr>
            <th>Make</td>
            <th>Model</td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->username }}</td>
            </tr>
        @endforeach
    </table>

@stop