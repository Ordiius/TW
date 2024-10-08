<form method="POST" action="{{ route('users.add') }}">
    @csrf
    <div>
        <label for="name">Имя пользователя</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
    </div>

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <label for="password">Пароль</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <label for="password_confirmation">Подтверждение пароля</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>

    <div>
        <label for="role_id">Роль</label>
        <select name="role_id" id="role_id">
            @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <button type="submit">Добавить пользователя</button>
    </div>
</form>
