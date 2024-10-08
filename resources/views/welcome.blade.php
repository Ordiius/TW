<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello world</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Hello!</h1>
        <p>:</p>
        <ul>
            <li><a href="{{ route('dashboard') }}">dashboard</a></li>
            <li><a href="{{ route('reports') }}">reports</a></li>
            <li><a href="{{ route('configuration') }}">configuration</a></li>
            <li><a href="{{ route('users.add') }}">add user</a></li>
            <li><a href="{{ route('register') }}">registration</a></li>
        </ul>
    </div>
</body>
</html>
