<?php

namespace App\Http\Controllers;

use App\Models\LastLogin;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("login.login");
    }

    public function post_login(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (Auth::attempt($credentials)) {
            LastLogin::create([
                "nama" => Auth::user()->nama,
                "id_user" => Auth::user()->id
            ]);

            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back();
    }

    public function logout()
    {
        Auth::logout();

        return redirect("/login");
    }
}
