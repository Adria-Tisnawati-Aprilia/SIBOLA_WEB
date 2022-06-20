<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use App\Models\Arena;
use App\Models\Lapangan;

class BookingController extends Controller
{
    public function index() {
        $data = [
            "data_booking" => Booking::all()
        ];

        return view("owner.booking.booking", $data);
    }

    public function create()
    {
    	$data = [
    		"data_arena" => Arena::get(),
    		"data_lapangan" => Lapangan::get()
    	];

    	return view("owner.booking.create", $data);
    }

    public function store(Request $request){
        Booking::create([
            "kode_booking" => time(),
            "id_users" => Auth::users()->id,
            "kode_lapangan" => $request->kode_lapangan,
            "kode_arena" => $request->kode_arena,
            "tanggal_booking" => $request->tanggal_booking,
            "harga" => $request->harga,
            "id_petugas" => $request->id_petugas
            ]);

        return back();
    }

    public function edit_booking(Request $request){
        $data = [
            "edit_booking" => Booking::where("kode_booking", $request->kode_booking)->first()
        ];

        return view('/owner/booking/edit_booking', $data);
    }

    public function simpan_booking(Request $request){
        Booking::where("kode_booking", $request->kode_booking)->update([
            "kode_booking" => time(),
            "id_users" => Auth::users()->id,
            "kode_lapangan" => $request->kode_lapangan,
            "kode_arena" => $request->kode_arena,
            "tanggal_booking" => $request->tanggal_booking,
            "harga" => $request->harga,
            "id_petugas" => $request->id_petugas
        ]);

        return back();
    }

    public function destroy($kode_booking){
        Booking::where("kode_booking", $kode_booking)->delete();

        return redirect()->back();
    }
}
