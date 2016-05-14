@extends('admin.layout')

@section('content')
<h4>USERS list ADMIN Page</h4>

<div>
Admin home

<a href="{{ action('AdminUsersController@create') }}" class="btn btn-primary btn-sm">Create</a>
<ul>
@foreach ($users as $user)
<li>
    <a href="{{ action('AdminUsersController@edit', $user->id) }}">{{$user->email}}</a>
{!! Form::open(['method' => 'DELETE', 'route' => ['admin.users.destroy', $user->id]]) !!}
    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
</li>
@endforeach
</ul>
</div>
@endsection

