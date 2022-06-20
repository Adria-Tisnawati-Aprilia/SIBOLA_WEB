<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use App\Models\Arena;
use App\Models\User;
use App\Models\Lapangan;

class BookingController extends Controller
{
    public function index()
    {
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

    public function store(Request $request)
    {
        Booking::create([
            "kode_booking" => $request->kode_booking,
            "id_users_booking" => Auth::user()->id,
            "kode_lapangan" => $request->kode_lapangan,
            "kode_arena" => $request->kode_arena,
            "tgl_booking" => $request->tanggal_booking,
            "harga" => $request->harga,
            "id_petugas" => Auth::user()->id
        ]);

        return redirect("owner/booking");
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Booking::where("kode_booking", $request->kode_booking)->first()
        ];

        return view('/owner/booking/edit', $data);
    }

    public function simpan(Request $request)
    {
        Booking::where("kode_booking", $request->kode_booking)->update([
            "kode_booking" => time(),
            "id_users" => Auth::user()->id,
            "kode_lapangan" => $request->kode_lapangan,
            "kode_arena" => $request->kode_arena,
            "tanggal_booking" => $request->tanggal_booking,
            "harga" => $request->harga,
            "id_petugas" => $request->id_petugas
        ]);

        return back();
    }

    public function destroy($kode_booking)
    {
        Booking::where("kode_booking", $kode_booking)->delete();

        return redirect()->back();
    }
}
