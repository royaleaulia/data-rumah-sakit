<?php

namespace App\Http\Controllers;

use App\Models\obat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obat = obat::select("*")->get();
        return view('obat', ['obat' => $obat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create_obat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obat = obat::create([
            'nama_obat' => $request->nama_obat,
            'jenis_obat' => $request->jenis_obat,
            'fungsi_obat' => $request->fungsi_obat,
        ]);

        return redirect()->action([ObatController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function show(obat $obat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function edit($id_obat)
    {
        $obat = DB::table('obat')->where('id_obat',$id_obat)->get();
	    return view('update_obat',['obat' => $obat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('obat')->where('id_obat',$request->id_obat)->update([
            'nama_obat' => $request->nama_obat,
            'jenis_obat' => $request->jenis_obat,
            'fungsi_obat' => $request->fungsi_obat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/obat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\obat  $obat
     *obatrn \Illuminate\Http\Response
     */
    public function destroy($id_obat)
    {
        DB::table('obat')->where('id_obat',$id_obat)->delete();
        return redirect('/obat');
    }
}
