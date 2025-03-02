@extends('layout')

@section('content')
<h2>Edit User</h2>
<p class="edit-name">Edit {{$user->name}}</p>
<div class="createform">
    <form method="POST" action="/users/{{$user->id}}">
        @csrf
        @method('PUT')
        <div class="creatediv">
            <label for="name" class="name">Name</label>
            <input type="text" class="input" name="name" value="{{$user->name}}"/>
            @error('name')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div class="creatediv">
            <label for="email" class="name">Email</label>
            <input type="email" class="input" name="email" value="{{$user->email}}"/>
            @error('email')
                <p>{{$message}}</p> 
            @enderror
        </div>
        <div class="creatediv">
            <label for="password" class="name">Password</label>
            <input type="password" class="input" name="password" value="{{$user->password}}"/>
            @error('password')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="active" class="name">Active</label>
            <input type="checkbox" class="input" name="active" value="{{$user->active}}" {{$user->active ? 'checked' : ''}}/>
        </div>
        <button type="submit">Update User</button>
    </form>
</div>
@endsection