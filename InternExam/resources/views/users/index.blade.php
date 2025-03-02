@extends('layout')

@section('content')
<h1>{{$heading}}</h1>
<div class="table">
    @unless(count($users) == 0)
    
    {{-- @foreach ($users as $user)  --}}
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td><a href="/users/{{$user['id']}}">{{$user['name']}}</a></td>
                <td>{{$user['email']}}</td>
                <td>{{ $user['active'] ? 'Active' : 'Inactive' }}</td>
            </tr>   
            @endforeach
        </tbody>
    </table>



        {{-- <h2><a href="/users/{{$user['id']}}">{{$user['name']}}</a></h2>
        <p>{{$user['email']}}</p>
        <p>{{ $user['active'] ? 'Active' : 'Inactive' }}</p> --}}
    {{-- @endforeach --}}
    
    @else
        <p>No users found</p>
    @endunless
</div>
<div class="pages">
    {{$users->links()}}
</div>
@endsection 