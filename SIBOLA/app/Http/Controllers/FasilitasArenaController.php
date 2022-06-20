<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\FasilitasArena;
use App\Models\Arena;
use Illuminate\Http\Request;

class FasilitasArenaController extends Controller
{
    public function index()
    {
        $data = [
            "data_fasilitas_arena" => FasilitasArena::get(),
            "data_fasilitas" => Fasilitas::get(),
            "data_arena" => Arena::get()
        ];

        return view("owner.fasilitas_arena.fasilitas", $data);
    }

    public function store(Request $request)
    {
        FasilitasArena::create($request->all());

        return back();
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => FasilitasArena::where("id", $request->id)->first()
        ];

        return view("owner.fasilitas_arena.edit", $data);
    }

    public function update(Request $request)
    {
        FasilitasArena::where("id", $request->id)->update([
            "id_fasilitas" => $request->id_fasilitas,
            "kode_arena" => $request->kode_arena
        ]);

        return back();
    }

    public function destroy($id)
    {
        FasilitasArena::where("id", $id)->delete();

        return back();
    }
}
