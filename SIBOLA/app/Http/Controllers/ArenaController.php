<?php

namespace App\Http\Controllers;

use App\Models\Arena;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArenaController extends Controller
{
    public function index()
    {
        $data = [
            "data_arena" => Arena::all()
        ];

        return view("owner.arena.arena", $data);
    }

    public function store(Request $request){
        Arena::create([
            "kode_arena" => time(),
            "id_owner" => Auth::owner()->id,
            "alamat" => $request->alamat,
            "nama_arena" => $request->nama_arena,
            "deskripsi" => $request->deskripsi,
            "no_hp" => $request->no_hp,
            "foto" => $request->foto
        ]);

        return back();
    }

    public function edit_arena(Request $request){
        $data = [
            "edit_arena" => Arena::where("kode_arena", $request->kode_arena)->first()
        ];

        return view('/owner/arena/edit_arena', $data);
    }

    public function update(Request $request){
        Arena::where("kode_arena", $request->kode_arena)->update([
            "alamat" => $request->alamat,
            "nama_arena" => $request->nama_arena,
            "deskripsi" => $request->deskripsi,
            "no_hp" => $request->no_hp,
            "foto" => $request->foto
        ]);

        return back();
    }

    public function destroy($kode_arena){
        Arena::where("kode_arena", $kode_arena)->delete();

        return redirect()->back();
    }
}
