@extends('layout')

@section('content')

<h2>
    {{$user['name']}}
</h2>
<p>
    {{$user['email']}}
</p>

@endsection