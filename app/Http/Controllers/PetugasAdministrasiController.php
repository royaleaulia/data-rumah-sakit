<?php

namespace App\Http\Controllers;
use App\Models\petugas_administrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasAdministrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        $petugas_administrasi = DB::table('petugas_administrasi')->get();
        return view('petugas_administrasi',['petugas_administrasi' => $petugas_administrasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_petugas_administrasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $petugas_administrasi = petugas_administrasi::create([
            'nama_petugas' => $request->nama_petugas,
            'alamat_petugas' => $request->alamat_petugas,
            'jenis_kelamin_petugas' => $request->jenis_kelamin_petugas
        ]);

        return redirect('/petugas_administrasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        $petugas_administrasi = PetugasAdministrasi::find($id);
        dd($id);
        return redirect()->action([PetugasAdministrasiController::class, 'index']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
    DB::table('petugas_administrasi')->where('id',$id)->get();
	return view('update_petugas_administrasi',['petugas_administrasi' => $petugas_administrasi]);
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
        DB::table('petugas_administrasi')->where('id',$request->petugas_administrasi)->update([
            'nama_petugas' => $request->nama_petugas,
            'alamat_petugas' => $request->alamat_petugas,
            'jenis_kelamin_petugas' => $request->jenis_kelamin_petugas
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/petugas_administrasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('petugas_administrasi')->where('id',$id)->delete();
        return redirect('/petugas_administrasi');
    }
}
