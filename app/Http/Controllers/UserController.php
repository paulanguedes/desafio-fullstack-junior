<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        Auth::login($user);
        return redirect('/customer');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            return redirect('/customer');
        } else {
            return redirect('/login')
                ->with('warning', 'E-mail e/ou senha inválidos')
            ;
        }
    }
    public function logout(Request $request)
    {
        return redirect('/login')->with(Auth::logout());
    }
}
