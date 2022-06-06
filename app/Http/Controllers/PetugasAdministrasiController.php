<?php

namespace App\Http\Controllers;

use App\Models\petugas_administrasi;
use Illuminate\Http\Request;

class PetugasAdministrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas_administrasi = petugas_administrasi::select("*")->get();
        return view('petugas_administrasi', ['petugas_administrasi' => $petugas_administrasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create_petugas_administrasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kamar = petugas_administrasi::create([
            'nama_petugas' => $request->nama_petugas,
            'alamat_petugas' => $request->alamat_petugas,
            'jenis_kelamin_petugas' => $request->jenis_kelamin_petugas,

        ]);

        return redirect()->action([PetugasAdministrasiController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pegawai_administrasi  $pegawai_administrasi
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
