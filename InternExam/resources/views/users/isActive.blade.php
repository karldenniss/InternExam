@extends('layout')

@section('content')
<h1>{{$heading}}</h1>

@unless(count($users) == 0)
<table class="active">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            @php
                $active = $user['active'] ? 'Active' : 'Inactive';
            @endphp
            <tr>
                <td>{{$user['id']}}</td>
                <td><a href="/users/{{$user['id']}}">{{$user['name']}}</a></td>
                <td>{{$user['email']}}</td>
                <td>{{ $active }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- @foreach ($users as $user):
    @php
    $active = $user['active'] ? 'Active' : 'Inactive'
    @endphp
    <h2><a href="/users/{{$user['id']}}">{{$user['name']}}</a></h2>
    <p>{{$user['email']}}</p>
    <p>{{ $user['active'] ? 'Active' : 'Inactive' }}</p>
@endforeach; --}}

@else
    <p>No users found</p>
@endunless

@endsection