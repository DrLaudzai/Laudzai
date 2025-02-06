<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index(Request $request) {
        // get untuk panggil seluruh data
        // find untuk menangkap 1 data berdasarkan id
        // create untu nambah data ke database
        // update untuk mengubah data ke data base
        // delete untuk hapus data ke data base
        $rooms = Room::where(function($q) use ($request){
        if(isset($request->search_name)){
            $q->where("name", "LIKE", "%".$request->search_name."%");
        }
        })->get();
        return view('room', compact('rooms'));
    }

    public function create(Request $request) {
        $room = (isset($request->id)) ? Room::find($request->id) : null;
        return view('create', compact('room'));
    }

    public function store(Request $request) {
        if (isset($request->id)) {
            $room = Room::find($request->id);
            $room->name = $request->name;
            $room->lantai = $request->lantai;
            $room->no_kamar = $request->no_kamar;
            $room->save();

            $data = $room;
        }else {
            $data = Room::create([
                "name" => $request->name,
                "no_kamar" => $request->no_kamar,
                "lantai" => $request->lantai
            ]);
        }

        return redirect()->to('/');
}

public function delete(Request $request) {
    $room = Room::find($request->id)->delete();
    return redirect()->back();
}
}