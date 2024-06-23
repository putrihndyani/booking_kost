<?php

namespace App\Http\Controllers;

use App\Models\BookingKamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookingkamar = BookingKamar::all();
        return view('admin.BookingKamar.bookingkamar', compact('bookingkamar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.BookingKamar.bookingkamar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $bookingkamar = new BookingKamar();
        $bookingkamar->kode_booking = $req->kode_booking;
        $bookingkamar->id_user = $req->id_user;
        $bookingkamar->id_tipekamar = $req->id_tipekamar;
        $bookingkamar->tgl_awal = $req->tgl_awal;
        $bookingkamar->tgl_akhir = $req->tgl_akhir;
        $bookingkamar->status = $req->status;
        $bookingkamar->harga = $req->harga;
        $bookingkamar->desc = $req->desc;
        $bookingkamar->save();

        return redirect('bookingkamar');
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
        return view('admin.BookingKamar.bookingkamar')->with('kode_booking', $id);
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
    public function destroy(string $kode_booking)
    {
        DB::table('booking_kamars')
            ->where('kode_booking', $kode_booking)
            ->delete();
        return redirect('bookingkamar');
    }
}
