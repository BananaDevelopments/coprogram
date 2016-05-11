@extends('layout')

@section('content')
<h4>Home Page</h4>

<div>
    <?php if(Auth::check()) { ?>
    Home
    <?php } else { ?>
    {!! Form::open(['action' => 'AuthController@login', 'method' => 'post']) !!}
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
    <?php } ?>
</div>
@endsection

