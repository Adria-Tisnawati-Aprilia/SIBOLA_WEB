<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HakAkses;
use Illuminate\Support\Facades\Validator;

class HakAksesController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $data = HakAkses::all();

        return response()->json(['message' => 'Request Success', 'data' => $data], 200);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'nama' => 'required',
        ]);

        if ($validasi->fails()) {
            return response()->json($validasi->errors(),400);
        }

        $cek = HakAkses::create([

            'nama' => $request->nama
        ]);

        if ($cek) {
            $data = [
                'message' => 'Create Success!',
                'status' => true
            ];
        } else {
            $data = [
                'message' => 'Create Failed!',
                'status' => false
            ];
        }

        return response()->json($data,200);
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        $validasi = Validator::make($request->all(), [
            'nama' => 'required',
        ]);

        if ($validasi->fails()) {
            return response()->json($validasi->errors(), 400);
        }

        $cek = HakAkses::where('id', $id)->update([
            'nama' => $request->nama
        ]);

        if ($cek) {
            $data = [
                'message' => 'Update Success!',
                'status' => true
            ];
        } else {
            $data = [
                'message' => 'Update Failed!',
                'status' => false
            ];
        }

        return response()->json($data, 200);
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $role = HakAkses::findOrfail($id);

        if ($role) {
            $cek = $role->delete();

            if ($cek) {
                $data = [
                    'message' => 'Delete Success!',
                    'status' => true
                ];
            } else {
                $data = [
                    'message' => 'Delete Failed!',
                    'status' => false
                ];
            }

            return response()->json($data, 200);
        }

        return response()->json(['message' => 'Not Found'], 404);
    }
}
