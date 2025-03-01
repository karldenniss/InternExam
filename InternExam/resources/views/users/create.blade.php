@extends('layout')

@section('content')
<div class="createform">
    <form method="POST" action="/users">
        @csrf
        <div class="creatediv">
            <label for="name" class="name">Name</label>
            <input type="text" class="input" name="name"/>
            @error('name')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div class="creatediv">
            <label for="email" class="name">Email</label>
            <input type="email" class="input" name="email"/>
            @error('email')
                <p>{{$message}}</p> 
            @enderror
        </div>
        <div class="creatediv">
            <label for="password" class="name">Password</label>
            <input type="password" class="input" name="password"/>
            @error('password')
                <p>{{$message}}</p>
            @enderror
        </div>
        </div>
        <button type="submit">Create User</button>
    </form>
</div>
@endsection