<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor=1;
        $ruang = ruang::all();
        return view('ruang.index',compact('nomor','ruang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('ruang.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ruang = new Ruang;

        $ruang->no_ruang = $request->ruang;
        $ruang->nm_ruang = $request->nama;
        $ruang->jumlah_bed = $request->jumlah;
        // $ruang->foto = $request->foto;
        $ruang->save();

        return redirect('/ruang');
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
        $ruang = Ruang::find($id);
        return view('ruang.edit',compact('ruang'));
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
        $ruang =  Ruang::find($id);

        $ruang->no_ruang = $request->ruang;
        $ruang->nm_ruang = $request->nama;
        $ruang->jumlah_bed = $request->jumlah;
        // $ruang->foto = $request->foto;
        $ruang->save();

        return redirect('/ruang');
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
