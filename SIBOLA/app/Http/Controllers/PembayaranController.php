<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    public function index()
    {
        $data = [
            "data_pembayaran" => Pembayaran::all()
        ];

        return view("owner.pembayaran.pembayaran", $data);
    }

    public function store(Request $request){
        Pembayaran::create([
            "kode_booking" => $request->kode_booking,
            "id_users_booking" => $request->id_users_booking,
            "bukti_bayar" => $request->bukti_bayar
        ]);

        return back();
    }

    public function edit(Request $request){
        $data = [
            "edit" => Pembayaran::where("id", $request->id)->first()
        ];

        return view('/owner/pembayaran/edit', $data);
    }

    public function update(Request $request){
        Pembayaran::where("id", $request->id)->update([
            "kode_booking" => $request->kode_booking,
            "id_users_booking" => $request->id_users_booking,
            "bukti_bayar" => $request->bukti_bayar
        ]);

        return back();
    }

    public function destroy($id){
        Pembayaran::where("id", $id)->delete();

        return redirect()->back();
    }
}
