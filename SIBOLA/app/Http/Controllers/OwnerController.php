<?php

namespace App\Http\Controllers;
use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        $data = [
            "data_owner" => Owner::all()
        ];
        return view("admin.owner.owner", $data);
    }
    public function store(Request $request){
        Owner::create([
            "id" => $request->id,
            "tanggal_bergabung" => $request->tanggal_bergabung,
            "status" => $request->status,
            "alamat" => $request->alamat_owner,
            "logo" => $request->logo_owner,
        ]);

        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Owner::where("id", $request->id)->first()
        ];

        return view("admin.owner.edit", $data);
    }

    public function destroy($id){
        Owner::where("id", $id)->delete();

        return redirect()->back();
    }
}
