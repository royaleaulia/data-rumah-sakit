<?php

namespace App\Http\Controllers;
use App\Models\kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        $kamar = DB::table('kamar')->get();
        return view('kamar',['kamar' => $kamar]);
        // $dokter = dokter::select("*")->get();
        // return view('dokter', ['dokter' => $dokter]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_kamar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $kamar = kamar::create([
            'nama_kamar' => $request->nama_kamar,
            'nomor_kamar' => $request->nomor_kamar
        ]);

        return redirect('/kamar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        $kamar = Kamar::find($id);
        dd($id);
        return redirect()->action([KamarController::class, 'index']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	$kamar = DB::table('kamar')->where('id',$id)->get();
	return view('update_kamar',['kamar' => $kamar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('kamar')->where('id',$request->id)->update([
            'nama_kamar' => $request->nama_kamar,
            'nomor_kamar' => $request->nomor_kamar
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/kamar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('kamar')->where('id',$id)->delete();
        return redirect('/kamar');
    }
}
