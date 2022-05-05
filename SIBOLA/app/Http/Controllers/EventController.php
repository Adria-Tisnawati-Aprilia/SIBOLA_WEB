<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $data = [
            "data_event" => Event::all()
        ];

        return view("owner.event.event", $data);
    }

    public function store(Request $request){
        Lapangan::create($request->all());

        return redirect()->back();
    }

    public function destroy($id){
        Event::where("id", $id)->delete();

        return redirect()->back();
    }
}
