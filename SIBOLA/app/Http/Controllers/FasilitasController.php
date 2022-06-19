<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $data = [
            "data_fasilitas" => Fasilitas::get()
        ];

        return view("owner.fasilitas.index", $data);
    }

    public function store(Request $request)
    {
        Fasilitas::create($request->all());

        return back();
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Fasilitas::where("id", $request->id)->first()
        ];

        return view("owner.fasilitas.edit", $data);
    }

    public function update(Request $request)
    {
        Fasilitas::where("id", $request->id)->update([
            "fasilitas" => $request->fasilitas
        ]);

        return back();
    }

    public function destroy($id)
    {
        Fasilitas::where("id", $id)->delete();

        return back();
    }
}
