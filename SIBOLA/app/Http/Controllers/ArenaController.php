<?php

namespace App\Http\Controllers;

use App\Models\Arena;
use Illuminate\Http\Request;

class ArenaController extends Controller
{
    public function index()
    {
        $data = [
            "data_role" => Arena::all()
        ];

        return view("owner.arena.arena", $data);
    }

    public function store(Request $request){
        Arena::create($request->all());

        return redirect()->back();
    }

    public function destroy($id){
        Arena::where("id", $id)->delete();

        return redirect()->back();
    }
}
