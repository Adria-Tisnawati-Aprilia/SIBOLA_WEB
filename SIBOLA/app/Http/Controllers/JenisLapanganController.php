<?php

namespace App\Http\Controllers;

use App\Models\JenisLapangan;
use Illuminate\Http\Request;

class JenisLapanganController extends Controller
{
    public function index()
    {
        $data = [
            "data_jenis_lapangan" => JenisLapangan::all()
        ];

        return view("owner.jenis_lapangan.index", $data);
    }

    public function store(Request $request)
    {
        JenisLapangan::create($request->all());

        return back();
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => JenisLapangan::where("id", $request->id)->first()
        ];

        return view("owner.jenis_lapangan.edit", $data);
    }

    public function update(Request $request)
    {
        JenisLapangan::where("id", $request->id)->update([
            "jenis_lapangan" => $request->jenis_lapangan
        ]);

        return back();
    }

    public function destroy($id)
    {
        JenisLapangan::where("id", $id)->delete();

        return back();
    }
}
