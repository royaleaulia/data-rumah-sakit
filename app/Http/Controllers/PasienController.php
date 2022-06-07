<?php

namespace App\Http\Controllers;
use App\Models\pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        $pasien = DB::table('pasien')->get();
        return view('pasien',['pasien' => $pasien]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_pasien');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $pasien = pasien::create([
            'nama_pasien' => $request->nama_pasien,
            'tanggal_lahir_pasien' => $request->tanggal_lahir_pasien,
            'alamat_pasien' => $request->alamat_pasien,
            'jenis_kelamin_pasien' => $request->jenis_kelamin_pasien,
            'no_telp_pasien' => $request->no_telp_pasien
        ]);

        return redirect('/pasien');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get($id_pasien)
    {
        $pasien = pasien::find($id_pasien);
        dd($id_kamar);
        return redirect()->action([KamarController::class, 'index']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pasien)
    {
	$pasien = DB::table('pasien')->where('id_pasien',$id_pasien)->get();
	return view('update_pasien',['pasien' => $pasien]);
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
        DB::table('pasien')->where('id_pasien',$request->id_pasien)->update([
            'nama_pasien' => $request->nama_pasien,
            'tanggal_lahir_pasien' => $request->tanggal_lahir_pasien,
            'alamat_pasien' => $request->alamat_pasien,
            'jenis_kelamin_pasien' => $request->jenis_kelamin_pasien,
            'no_telp_pasien' => $request->no_telp_pasien
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pasien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pasien)
    {
        DB::table('pasien')->where('id_pasien',$id_pasien)->delete();
        return redirect('/pasien');
    }
}
