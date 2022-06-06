<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response\
     */
    public function index()
    {
        $pasien = pasien::select("*")->get();
        return view('pasien', ['pasien' => $pasien]);
        // $pasien = DB::table('pasien')->get();
        // return response()->json([
        //     'pasien'=> $pasien
        // ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create_pasien');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kamar = pasien::create([
            'nama_pasien' => $request->nama_pasien,
            'tanggal_lahir_pasien' => $request->tanggal_lahir_pasien,
            'alamat_pasien' => $request-> alamat_pasien,
            'jenis_kelamin_pasien' => $request->jenis_kelamin_pasien,
            'no_telp_pasien' => $request->no_telp_pasien,
        ]);

        return redirect()->action([PasienController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
