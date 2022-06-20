<?php

namespace App\Http\Controllers;

use App\Models\HakAkses;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $data = [
            "data_role" => HakAkses::all(),
            "data_user" => User::all()
        ];

        return view("admin.users.users", $data);
    }

    public function store(Request $request)
    {
        if ($request->file("foto")) {
            $data = $request->file("foto")->store("foto_users");
        }
        User::create([
            "nama" => $request->nama,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "id_hak_akses" => 1,
            "no_hp" => $request->no_hp,
            "alamat" => $request->alamat,
            "foto" => $data
        ]);

        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => User::where("id", $request->id)->first()
        ];

        return view("admin.users.edit", $data);
    }

    public function destroy($id)
    {
        User::where("id", $id)->delete();

        return redirect()->back();
    }
}
