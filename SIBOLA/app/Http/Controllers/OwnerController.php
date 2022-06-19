<?php

namespace App\Http\Controllers;
use App\Models\Owner;
use App\Models\User;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        $data = [
            "data_owner" => Owner::all()
        ];
        return view("admin.owner.owner", $data);
    }
    public function store(Request $request){

        $user = new User;
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt("owner");
        $user->no_hp = $request->no_hp;
        $user->id_hak_akses = 2;
        $user->alamat = $request->alamat;

        $user->save();

        Owner::create([
            "id_users" => $user->id,
            "tanggal_bergabung" => $request->tanggal_bergabung,
            "alamat_owner" => $request->alamat_owner,
            "logo" => $request->logo_owner,
        ]);

        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Owner::where("id", $request->id)->first()
        ];

        return view("admin.owner.edit", $data);
    }

    public function update(Request $request)
    {
        User::where("id", $request->id)->update([
            "nama" => $request->nama,
            "email" => $request->email,
            "no_hp" => $request->no_hp,
            "alamat" => $request->alamat
        ]);

        Owner::where("id_users", $request->id)->update([
            "tanggal_bergabung" => $request->tanggal_bergabung,
            "alamat_owner" => $request->alamat_owner,
        ]);

        return back();
    }

    public function destroy($id){
        Owner::where("id", $id)->delete();

        return redirect()->back();
    }
}
