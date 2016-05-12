@extends('layout')

@section('content')
<div>
        <label>
            Email
        </label>

        <input class="form-control" type="text" name="email" value='{{ $user->email }}'>

        <label>
            Password
        </label>

        <input type="text" class="form-control" name="password" value='{{ $user->password }}'>

        <input type="submit" name="submit" class="btn btn-warning btn-sm" value="Ok">
</div>
@endsection

