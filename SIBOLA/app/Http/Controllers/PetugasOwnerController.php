<?php

namespace App\Http\Controllers;

use App\Models\PetugasOwner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PetugasOwnerController extends Controller
{
    public function index()
    {
        $data = [
            "data_petugas" => PetugasOwner::where("id_owner", Auth::user()->id)->get()
        ];

        return view("owner.petugas_owner.index", $data);
    }

    public function store(Request $request)
    {
        if ($request->file("foto")) {
            $data = $request->file("foto")->store("foto_petugas");
        }

        $user = new User;

        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt("petugas_owner");
        $user->no_hp = $request->no_hp;
        $user->id_hak_akses = 3;
        $user->alamat = $request->alamat;
        $user->foto = $data;

        $user->save();

        $petugas = new PetugasOwner;

        $petugas->id = $user->id;
        $petugas->id_owner = Auth::user()->id;

        $petugas->save();

        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => PetugasOwner::where("id", $request->id)->first()
        ];

        return view("owner.petugas_owner.edit", $data);
    }

    public function update(Request $request)
    {
        if ($request->file("foto")) {
            if ($request->oldGambar) {
                Storage::delete($request->foto);
            }

            $data = $request->file("foto")->store("foto_petugas");
        } else {
            $data = $request->oldGambar;
        }

        User::where("id", $request->id)->update([
            "nama" => $request->nama,
            "email" => $request->email,
            "no_hp" => $request->no_hp,
            "alamat" => $request->alamat,
            "foto" => $data,
        ]);

        return back();
    }

    public function destroy(Request $request, $id)
    {
        $petugas = PetugasOwner::where("id", $id)->delete();

        $user = User::where("id", $id)->first();

        if ($request->oldGambar) {
            Storage::delete($request->oldGambar);
        }

        User::where("id", $id)->delete();

        return back();
    }
}
