@extends('layout')

@section('content')
<div>
    {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
        <label>
            Email
        </label>
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
        <!--<input class="form-control" type="text" name="email" value="">-->

        <label>
            Password
        </label>

        <input type="password" class="form-control" name="password">
        
        <label>
            Confirm Password
        </label>

        <input type="password" class="form-control" name="password_confirmation">

        <label>
            IS_ADMIN
        </label>
        
        {!! Form::select('is_admin', ['no', 'yes'], false) !!}
        
        <input type="submit" name="submit" class="btn btn-warning btn-sm" value="Create">
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

