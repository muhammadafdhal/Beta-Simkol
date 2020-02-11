<?php

namespace App\Http\Controllers;

use App\infosekolah;
use Illuminate\Http\Request;

class InfosekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $informasi = infosekolah::all();
        return view('informasi.index', compact('informasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $informasi = infosekolah::all();
        return view('informasi.create', compact('informasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $informasi = new infosekolah;
        $informasi->is_judul = $request['is_judul'];
        $informasi->is_isi = $request['is_isi'];
        $informasi->save();
        return redirect('/informasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\infosekolah  $infosekolah
     * @return \Illuminate\Http\Response
     */
    public function show(infosekolah $infosekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\infosekolah  $infosekolah
     * @return \Illuminate\Http\Response
     */
    public function edit( $is_id)
    {
        //
        $informasi = infosekolah::find($is_id);
        return view('informasi.edit', compact('informasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\infosekolah  $infosekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $is_id)
    {
        //
        $informasi = infosekolah::find($is_id);
        $informasi->is_judul = $request['is_judul'];
        $informasi->is_isi = $request['is_isi'];
        $informasi->save();
        return redirect('/informasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\infosekolah  $infosekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy( $is_id)
    {
        //
        $informasi = infosekolah::find($is_id);
        $informasi->destroy();
        return redirect('/informasi');
    }
}
