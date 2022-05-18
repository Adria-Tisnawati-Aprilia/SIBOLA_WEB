<?php

namespace App\Http\Controllers;

use App\Models\HakAkses;
use Illuminate\Http\Request;

class HakAksesController extends Controller
{
    public function index()
    {
        $data = [
            "data_role" => HakAkses::all()
        ];

        return view("admin.hak_akses.index", $data);
    }

    public function store(Request $request){
        HakAkses::create($request->all());

        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => HakAkses::where("id", $request->id)->first()
        ];

        return view("admin.hak_akses.edit", $data);
    }

    public function update(Request $request)
    {
        HakAkses::where("id", $request->id)->update([
            "nama" => $request->nama,
        ]);

        return redirect()->back();
    }

    public function destroy($id){
        HakAkses::where("id", $id)->delete();

        return redirect()->back();
    }
}
