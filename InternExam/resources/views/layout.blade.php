<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InternExam</title>
</head>
<body>
    <h1>InternExam</h1>
    {{-- <a href="{{ route('isActive')}}">Show Active Users</a> --}}
    <a href="{{ route('isActive')}}">Show Active Users</a>
    <a href="/">back</a>
    <a href="{{ route('create')}}">Register User</a>
    {{-- VIEW OUTPUT --}}
    @yield('content')
</body>
</html>