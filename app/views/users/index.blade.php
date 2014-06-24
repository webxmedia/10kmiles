@extends('layouts.default')

@section('content')
    <h1>Team</h1>

<table class="table table-striped table-hover">
    <tr>
        <th style="width: 30px;">&nbsp;</td>
        <th>Username</td>
        <th>Name</td>
        <th>Email</td>
        <th style="width: 130px;">&nbsp;</td>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td style="vertical-align:middle;"><img src="http://placehold.it/25x25" alt="..." class="img-rounded"></td>
        <td style="vertical-align:middle;">{{ $user->username }}</td>
        <td style="vertical-align:middle;">{{ $user->username }}</td>
        <td style="vertical-align:middle;">{{ $user->username }}</td>
        <td style="vertical-align:middle;">
            <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>&nbsp;
            <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-minus-circle"></i></button>&nbsp;
            <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
        </td>
       </tr>
    @endforeach
</table>
@stop
