<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class LapanganController extends Controller
{
    public function index() {
        $data = [
            "data_lapangan" => Lapangan::all()
        ];

        return view("owner.lapangan.lapangan", $data);
    }

    public function store(Request $request){
        Lapangan::create($request->all());

        return redirect()->back();
    }

    public function destroy($id){
        Lapangan::where("id", $id)->delete();

        return redirect()->back();
    }
}
