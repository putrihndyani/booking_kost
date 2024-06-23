<?php

namespace App\Http\Controllers;

use App\Models\DataKamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kamar = DataKamar::all();
        return view('admin.datakamar.datakamar', compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.datakamar.datakamar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $dataKamar = new DataKamar();
        $dataKamar->no_kamar = $req->no_kamar;
        $dataKamar->id_tipekamar = $req->id_tipekamar;
        $dataKamar->status = $req->status;
        $dataKamar->harga = $req->harga;
        $photos = $req->file('foto_kamar');
        $photoPaths = [];
        foreach ($photos as $foto) {

            $photoPath = $foto->store('public/kamar/');
            $photoPaths[] = $photoPath;
        }
        // json mengubah data dan menyimpan data dalam bentuk array
        $photoPathsJson = json_encode($photoPaths);
        $dataKamar->foto_kamar = $photoPathsJson;
        $dataKamar->desc = $req->desc;
        $dataKamar->save();

        return redirect('datakamar');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('admin.datakamar.editdatakamar')->with('id', $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('data_kamars')
            ->where('id', $id)
            ->delete();
        return redirect('datakamar');
    }
}
