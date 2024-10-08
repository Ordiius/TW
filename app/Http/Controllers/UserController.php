<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Account;
use Hash;

class UserController extends Controller
{
    public function showAddUserForm()
    {
        $roles = Role::whereIn('name', [Role::ADMIN, Role::EMPLOYEE])->get();
        return view('users.add', compact('roles'));
    }

    public function addUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role_id' => 'required|exists:roles,id',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
            'account_id' => auth()->user()->account_id,
        ]);

        return redirect('/dashboard')->with('status', 'Пользователь успешно добавлен!');
    }
}
