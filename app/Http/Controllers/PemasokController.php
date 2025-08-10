<?php

namespace App\Http\Controllers;

use App\Models\Pemasok;
use Illuminate\Http\Request;

class PemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pemasoks = Pemasok::all();
        return view('page.pemasok', compact('pemasoks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pemasok'   => 'required|string|max:255',
            'email'          => 'required|email|unique:pemasoks,email',
            'tgl_terdaftar'  => 'required|date',
            'noHP'           => 'required|string|unique:pemasoks,noHP',
            'alamat'         => 'required|string',
            'status'         => 'required|in:aktif,nonaktif',
        ]);
        Pemasok::create($validatedData);
        return back()->with('successNotif', "Data '" . $request->nama_pemasok . "' berhasil ditambahkan.");
    }



    /**
     * Display the specified resource.
     */
    public function show(Pemasok $pemasok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemasok $pemasok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pemasok $pemasok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemasok $pemasok)
    {
        //
    }
}
