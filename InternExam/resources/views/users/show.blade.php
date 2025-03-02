@extends('layout')

@section('content')

<h2 class="user-name">
    {{$user['name']}}
</h2>
<p class="user-email">
    {{$user['email']}}
</p>
<p class="isActive">
    {{ $user['active'] ? 'Active' : 'Inactive' }}
</p>
<div class="edit-delete">
    <a href="/users/{{$user->id}}/edit">Edit</a>
    <form method="POST"action="/users/{{$user->id}}">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
</div>
@endsection