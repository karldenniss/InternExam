@extends('layout')

@section('content')
<h1>{{$heading}}</h1>
<div>
    @unless(count($users) == 0)
    
    @foreach ($users as $user): 
        <h2><a href="/users/{{$user['id']}}">{{$user['name']}}</a></h2>
        <p>{{$user['email']}}</p>
        <p>{{ $user['active'] ? 'Active' : 'Inactive' }}</p>
    @endforeach;
    
    @else
        <p>No users found</p>
    @endunless
</div>
<div>
    {{$users->links()}}
</div>
@endsection 