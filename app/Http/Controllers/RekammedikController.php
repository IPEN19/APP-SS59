<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rekammedik;
class RekammedikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $nomor=1;
        // $rekammedik = Rekammedik::all();
        // return view('ruang.index',compact('nomor','rekammedik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return view ('ruang.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $rekammedik = new Rekammedik;

        // $rekammedik->no_rekmed = $request->kode;
        // $rekammedik->nik_pass = $request->nik;
        // $rekammedik->nm_pass = $request->nama;
        // $rekammedik->umur_pass = $request->umur;
        // $rekammedik->hp_pass = $request->hp;
        // $rekammedik->alamat_pass = $request->alamat;
        // $rekammedik->diagnosa = $request->diagnosa;
        // $rekammedik->ruangs_id = $request->id_ruang;
        // $rekammedik->foto = $request->foto;
        // $rekammedik->save();

        // return redirect('/rekammedik');

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
