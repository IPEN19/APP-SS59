<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rekammedik;
use App\Models\Ruang;
class RekammedikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor=1;
        $rekammedik = Rekammedik::all();
        return view('rekammedik.index',compact('nomor','rekammedik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ruang = Ruang::all();
       return view ('rekammedik.form',compact('ruang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rekammedik = new Rekammedik;

        $rekammedik->no_rekmed = $request->norek;
        $rekammedik->nik_pass = 123;
        $rekammedik->nm_pass = $request->nama;
        $rekammedik->umur_pass = "123";
        $rekammedik->hp_pass = $request->hp;
        $rekammedik->alamat_pass = $request->alamat;
        $rekammedik->diagnosa = $request->diagnosa;
        $rekammedik->ruangs_id = $request->ruang;
        $rekammedik->foto ="default.jpg";
        $rekammedik->save();

        return redirect('/rekammedik');

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
        $rekammedik = Rekammedik::find($id);
        return view('rekammedik.edit',compact('rekammedik'));
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
