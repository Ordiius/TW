<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
</head>
<body>
    <div class="container">
        <h1>Вход в систему</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <label for="email">Электронная почта:</label>
            <input type="email" id="email" name="email" required>
            <br>

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
            <br>

            <button type="submit">Войти</button>
        </form>
    </div>
</body>
</html>
