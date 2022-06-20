<?php

namespace App\Http\Controllers;

use App\Models\PetugasOwner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasOwnerController extends Controller
{
    public function index()
    {
        $data = [
            "data_petugas" => PetugasOwner::get()
        ];

        return view("owner.petugas_owner.index", $data);
    }

    public function store(Request $request)
    {
        $user = new User;

        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt("");
        $user->no_hp = $request->no_hp;
        $user->id_hak_akses = 3;
        $user->alamat = $request->alamat;

        $user->save();

        $petugas = new PetugasOwner;

        $petugas->id_user = $user->id;
        $petugas->id_owner = Auth::user()->id;
    }
}
