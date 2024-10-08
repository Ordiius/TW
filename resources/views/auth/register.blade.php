<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <div class="container">
        <h1>Регистрация аккаунта</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" required>
            <br>

            <label for="email">Электронная почта:</label>
            <input type="email" id="email" name="email" required>
            <br>

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
            <br>

            <label for="role">Роль:</label>
            <select id="role" name="role">
                <option value="admin">Администратор</option>
                <option value="employee">Сотрудник</option>
            </select>
            <br>

            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>
</body>
</html>
