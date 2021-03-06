@extends('layout')

@section('content')
<div>
    {!! Form::open(['route' => ['users.update', $id], 'method' => 'PATCH']) !!}
        <label>
            Email
        </label>
        {!! Form::text('email', $user->email, ['class' => 'form-control']) !!}

        <label>
            Password
        </label>
        
        <input type="password" class="form-control" name="password">
        
        <label>
            Confirm Password
        </label>
        
        <input type="password" class="form-control" name="password_confirmation">

        <input type="submit" name="submit" class="btn btn-warning btn-sm" value="Update">
    {!! Form::close() !!}
    
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif
</div>
@endsection

