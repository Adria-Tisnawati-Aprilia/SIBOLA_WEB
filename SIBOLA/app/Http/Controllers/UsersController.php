<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $data = [
            "data_role" => User::all()
        ];

        return view("admin.users.users", $data);
    }

    public function store(Request $request){
        User::create($request->all());

        return redirect()->back();
    }

    public function destroy($id){
        User::where("id", $id)->delete();

        return redirect()->back();
    }
}
