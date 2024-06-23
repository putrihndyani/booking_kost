<?php

namespace App\Http\Controllers;

use App\Models\TipeKamar;
use Illuminate\Http\Request;

class TipeKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $tipekamar = TipeKamar::all();
        return view('admin.datakamar.tipekamar', compact('tipekamar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $tipekamar = new TipeKamar();
        $tipekamar->id = $req->id;
        $tipekamar->nama_tipe = $req->nama_tipe;
        $tipekamar->ukuran = $req->ukuran;
        $tipekamar->save();

        return redirect('tipekamar');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        //
    }
}
