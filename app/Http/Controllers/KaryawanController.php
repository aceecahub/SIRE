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
            'email'     => 'required|email|max:255',
            'kelas'     => 'required|string|max:50',
            'jk'        => 'required|in:L,P',
            'alamat'    => 'required|string|max:255',
            'noHP'      => 'required|integer',
            'status'    => 'required|in:online,offline',
        ]);

        Karyawan::create($validatedData);

        return redirect()->route('page.karyawan')->with('success', 'Karyawan Telah Ditambahkan.');
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
