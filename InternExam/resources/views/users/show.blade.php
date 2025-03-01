@extends('layout')

@section('content')

<h2>
    {{$user['name']}}
</h2>
<p>
    {{$user['email']}}
</p>
<p>
    {{ $user['active'] ? 'Active' : 'Inactive' }}
</p>
<div>
    <a href="/users/{{$user->id}}/edit">Edit</a>
</div>
@endsection