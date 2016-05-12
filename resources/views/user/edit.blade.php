@extends('layout')

@section('content')
<div>
    {!! Form::open(['route' => ['users.update', $id], 'method' => 'PATCH']) !!}
        <label>
            Email
        </label>

        <input class="form-control" type="text" name="email" value='{{ $user->email }}'>

        <label>
            Password
        </label>

        <input type="password" class="form-control" name="password">

        <input type="submit" name="submit" class="btn btn-warning btn-sm" value="Update">
    {!! Form::close() !!}
</div>
@endsection

