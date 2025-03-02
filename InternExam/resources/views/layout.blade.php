<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InternExam</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-top: 20px;
        }
        h2 {
            text-align: center;
            color: #2c3e50;
            margin-top: 20px;
        }
        .edit-name {
            text-align: center;
            color: #2c3e50;
            margin-top: 20px;
        }
        a {
            text-decoration: none;
            color: #3498db;
            margin: 0 10px;
            font-weight: bold;
        }

        a:hover {
            color: #2980b9;
            text-decoration: underline;
        }

        
        .nav-links {
            text-align: center;
            margin: 20px 0;

        }
        .table{
            margin-left: 30%;
            margin-right: auto;
        }

        .content {
            padding: 20px;
            background-color: #fff;
            margin: 20px auto;
            max-width: 800px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .pages{
            padding: 40%
            margin-top: 30px;
            display: flex;
            justify-content: center;
        }
        table {
            width: 55%;
            border-collapse: separate; 
            border-spacing: 10px;
        }
        .active{
            margin-left: 25%
        }
        .user-name{
            text-align: center;
        }
        .user-email{
            text-align: center;
        }
        .isActive{
            text-align: center;
        }
        .edit-delete {
        display: flex;
        align-items: center;    
        gap: 10px; 
        justify-content: center;
        }

        .edit-delete a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            align-self: center
        }

        .edit-delete a:hover {
            text-decoration: underline;
            color: #2980b9;
        }

        .edit-delete form {
            margin: 0; 
        }

        .edit-delete button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 4px;
        }

        .edit-delete button:hover {
            background-color: #c0392b;
        }

        .createform {
        display: flex;
        justify-content: center;
        align-items: 30%;
        min-height: 50vh; /* Full height of the viewport */
        background-color: #f4f4f9; /* Light background color */
        padding: 20px;
        }

        /* Form styling */
        .createform form {
            background-color: #c0c0c0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px; /* Limit form width */
        }

        /* Input container styling */
        .creatediv {
            margin-bottom: 15px;
        }

        /* Label styling */
        .creatediv .name {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        /* Input field styling */
        .creatediv .input {
            width: 95%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        /* Error message styling */
        .creatediv .error {
            color: #e74c3c;
            font-size: 14px;
            margin-top: 5px;
        }

        /* Submit button styling */
        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>InternExam</h1>

    {{-- <a href="{{ route('isActive')}}">Show Active Users</a> --}}
    <div class="nav-links">
        <a href="{{ route('isActive')}}">Show Active Users</a>
        <a href="/">back</a>
        <a href="{{ route('create')}}">Register User</a>
    </div>
    {{-- VIEW OUTPUT --}}
    @yield('content')
</body>
</html>