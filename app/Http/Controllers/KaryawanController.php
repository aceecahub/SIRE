<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
        $karyawans = Karyawan::all();
        return view('page.karyawan', compact('karyawans'));
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
            'nama'      => 'required|string|max:255',
            'email'     => 'required|email|unique:karyawans,email',
            'kelas'     => 'required|string',
            'jk'        => 'required|in:L,P',
            'alamat'    => 'required|string',
            'noHP'      => 'required|string|unique:karyawans,noHP',
        ]);
        Karyawan::create($validatedData);
        return back()->with('successNotif', "Data '" . $request->nama . "' berhasil ditambahkan.");
    }



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
