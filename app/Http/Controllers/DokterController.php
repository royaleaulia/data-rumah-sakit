<?php

namespace App\Http\Controllers;
use App\Models\dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        $dokter = DB::table('dokter')->get();
        return view('dokter',['dokter' => $dokter]);
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
        return view('create_dokter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $dokter = dokter::create([
            'nomor_identitas_dokter' => $request->nomor_identitas_dokter,
            'nama_dokter' => $request->nama_dokter,
            'jenis_kelamin_dokter' => $request->jenis_kelamin_dokter,
            'spesialis' => $request->spesialis,
        ]);

        return redirect('/dokter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get($id_dokter)
    {
        $dokter = Dokter::find($id_dokter);
        dd($id_dokter);
        return redirect()->action([DokterController::class, 'index']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_dokter)
    {
	$dokter = DB::table('dokter')->where('id_dokter',$id_dokter)->get();
	return view('update_dokter',['dokter' => $dokter]);
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
        DB::table('dokter')->where('id_dokter',$request->id_dokter)->update([
            'nama_dokter' => $request->nama_dokter,
            'jenis_kelamin_dokter' => $request->jenis_kelamin_dokter,
            'spesialis' => $request->spesialis
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
    public function destroy($id_dokter)
    {
        DB::table('dokter')->where('id_dokter',$id_dokter)->delete();
        return redirect('/dokter');
    }
}
