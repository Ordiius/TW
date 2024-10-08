<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\User;
use App\Models\Role;
use Hash;

class AccountController extends Controller
{
    //
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Обработка регистрации аккаунта
    public function register(Request $request)
    {
        $request->validate([
            'account_name' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        //
        $account = Account::create([
            'name' => $request->account_name,
        ]);

        //Owner
        $ownerRole = Role::where('name', Role::OWNER)->first();
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $ownerRole->id,
            'account_id' => $account->id,
        ]);

        //
        auth()->login($user);

        return redirect('/dashboard')->with('status', 'account created!');
    }
}
