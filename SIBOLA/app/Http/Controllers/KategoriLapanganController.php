<?php

namespace App\Http\Controllers;

use App\Models\KategoriLapangan;
use Illuminate\Http\Request;

class KategoriLapanganController extends Controller
{
    public function index()
    {
        $data = [
            "data_kategori_lapangan" => KategoriLapangan::get()
        ];

        return view("owner.kategori_lapangan.index", $data);
    }

    public function store(Request $request)
    {
        KategoriLapangan::create($request->all());

        return back();
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => KategoriLapangan::where("id", $request->id)->first()
        ];

        return view("owner.kategori_lapangan.edit", $data);
    }

    public function update(Request $request)
    {
        KategoriLapangan::where("id", $request->id)->update([
            "kategori_lapangan" => $request->kategori_lapangan
        ]);

        return back();
    }

    public function destroy($id)
    {
        KategoriLapangan::where("id", $id)->delete();

        return back();
    }
}
