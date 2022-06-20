<?php

namespace App\Http\Controllers;

use App\Models\LastLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index()
    {
        $data = [
            "data_informasi_login" => LastLogin::where("id_user", Auth::user()->id)->get()
        ];

        return view("admin.home", $data);
    }

    public function home()
    {
        $data = [
            "data_informasi_login" => LastLogin::where("id_user", Auth::user()->id)->get()
        ];

        return view("admin.home", $data);
    }

    public function informasi_login()
    {
        $data = [
            "data_informasi_login" => LastLogin::where("id_user", Auth::user()->id)->get()
        ];

        return view("public.informasi_login.index", $data);
    }
}
