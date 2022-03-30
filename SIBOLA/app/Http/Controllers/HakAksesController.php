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

    public function destroy($id){
        HakAkses::where("id", $id)->delete();

        return redirect()->back();
    }
}
