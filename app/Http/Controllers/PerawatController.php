<?php

namespace App\Http\Controllers;

use App\Models\perawat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PerawatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perawat = perawat::select("*")->get();
        return view('perawat', ['perawat' => $perawat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create_perawat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perawat = perawat::create([
            'nama_perawat' => $request->nama_perawat,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect()->action([PerawatController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
        $dokter = DB::table('perawat')->where('id',$id)->get();
	    return view('update_perawat',['perawat' => $perawat]);
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
        DB::table('perawat')->where('id',$request->id)->update([
            'nama_perawat' => $request->nama_dokter,
            'jenis_kelamin' => $request->jenis_kelamin
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/dokter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('perawat')->where('id', $id)->delete();
        return redirect('/perawat');
    }
}
