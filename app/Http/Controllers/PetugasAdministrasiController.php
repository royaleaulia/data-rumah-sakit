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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pegawai_administrasi  $pegawai_administrasi
     * @return \Illuminate\Http\Response
     */
    public function show(pegawai_administrasi $pegawai_administrasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pegawai_administrasi  $pegawai_administrasi
     * @return \Illuminate\Http\Response
     */
    public function edit(pegawai_administrasi $pegawai_administrasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pegawai_administrasi  $pegawai_administrasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pegawai_administrasi $pegawai_administrasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pegawai_administrasi  $pegawai_administrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(pegawai_administrasi $pegawai_administrasi)
    {
        //
    }
}
