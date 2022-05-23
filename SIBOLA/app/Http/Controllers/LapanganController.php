<?php

namespace App\Http\Controllers;

use App\Models\Arena;
use App\Models\Lapangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LapanganController extends Controller
{
    public function index() {
        $data = [
            "data_arena" => Arena::where("id_users", Auth::user()->id)->get(),
            "data_lapangan" => Lapangan::all()
        ];

        return view("owner.lapangan.lapangan", $data);
    }

    public function store(Request $request){
        Lapangan::create([
            "kode_lapangan" => time(),
            "kode_arena" => $request->kode_arena,
            "nama_lapangan" => $request->nama_lapangan,
            "alas_lapangan" => $request->alas_lapangan,
            //"foto" => $request->foto,
            "harga" => $request->harga
            ]);

        return back();
    }

    public function edit_lapangan(Request $request){
        $data = [
            "data_arena" => Arena::where("id_users", Auth::user()->id)->get(),
            "edit_lapangan" => Lapangan::where("kode_lapangan", $request->kode_lapangan)->first()
        ];

        return view('/owner/lapangan/edit_lapangan', $data);
    }

    public function simpan_lapangan(Request $request){
        Lapangan::where("kode_lapangan", $request->kode_lapangan)->update([
            "kode_arena" => $request->kode_arena,
            "nama_lapangan" => $request->nama_lapangan,
            "alas_lapangan" => $request->alas_lapangan,
            //"foto" => $request->foto,
            "harga" => $request->harga
        ]);

        return back();
    }

    public function destroy($kode_lapangan){
        Lapangan::where("kode_lapangan", $kode_lapangan)->delete();

        return redirect()->back();
    }
}
