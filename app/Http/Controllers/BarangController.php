<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $barangs = Barang::all();
        return view('page.barang', compact('barangs'));
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
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_barang'   => 'required|string|max:255',
            'harga_jual'          => 'required|string',
            'harga_beli'          => 'required|string',
            'kadaluarsa'  => 'required|date',
            'stok'           => 'required|string',
            'status'         => 'required|in:aktif,nonaktif',
        ]);
        Barang::create($validatedData);
        return back()->with('successNotif', "Data '" . $request->nama_barang . "' berhasil ditambahkan.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
