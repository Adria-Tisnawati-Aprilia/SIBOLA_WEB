<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index() {
        $data = [
            "data_arena" => Arena::where("id_users", Auth::user()->id)->get(),
            "data_lapangan" => Lapangan::all()
        ];

        return view("owner.booking.booking", $data);
    }

    public function store(Request $request){
        Booking::create([
            "kode_lapangan" => time(),
            "kode_arena" => $request->kode_arena,
            "nama_lapangan" => $request->nama_lapangan,
            "alas_lapangan" => $request->alas_lapangan,
            //"foto" => $request->foto,
            "harga" => $request->harga
            ]);

        return back();
    }

    public function edit_booking(Request $request){
        $data = [
            "data_arena" => Arena::where("id_users", Auth::user()->id)->get(),
            "edit_booking" => Lapangan::where("kode_lapangan", $request->kode_lapangan)->first()
        ];

        return view('/owner/booking/edit_booking', $data);
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
