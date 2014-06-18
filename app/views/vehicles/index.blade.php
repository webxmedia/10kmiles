@extends('layouts.default')

@section('content')
    <h1>My vehicles</h1>

    <table class="table table-striped table-hover">
    @foreach ($users as $user)
        <tr><td>{{ $user->username }}</td></tr>
    @endforeach
    </table>

@stop