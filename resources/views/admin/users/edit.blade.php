@extends('layout')

@section('content')
<div>
    {!! Form::open(['route' => ['admin.users.update', $user->id], 'method' => 'PATCH']) !!}
        <label>
            Email
        </label>
        {!! Form::text('email', $user->email, ['class' => 'form-control']) !!}

        <label>
            IS_ADMIN
        </label>
        
        {!! Form::select('is_admin', ['no', 'yes'], $user->is_admin) !!}
        
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

