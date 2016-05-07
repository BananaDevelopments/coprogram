@extends('layout')

@section('content')
<div>
    {!! Form::open(['route' => 'users.store']) !!}
        <label>
            Email
        </label>

        <input class="form-control" type="text" name="email">

        <label>
            Password
        </label>

        <input type="password" class="form-control" name="password">

        <input type="submit" name="submit" class="btn btn-warning btn-sm" value="Login">
    {!! Form::close() !!}
</div>
@endsection

