<?php

namespace App\Http\Controllers;

use App\nilai;
use App\user;
use App\kelas;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nilai = nilai::join('users','id','nl_sw_id')->join('kelas','kls_id','nl_kls_id')->get();
        return view('nilai.index', compact('nilai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $nilai = nilai::join('users','id','nl_sw_id')->join('kelas','kls_id','nl_kls_id')->get();
        $siswa = user::where('us_level','Siswa')->get();
        $guru = user::where('us_level','Guru')->get();
        $kelas = kelas::all();
        return view('nilai.create', compact('nilai','siswa','guru','kelas'));
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
        $nilai = new nilai;
        $nilai->nl_sw_id = $request['nl_sw_id'];
        $nilai->nl_gr_id = $request['nl_gr_id'];
        $nilai->nl_kls_id = $request['nl_kls_id'];
        $nilai->nl_smst = $request['nl_smst'];
        $nilai->nl_nilai = $request['nl_nilai'];
        $nilai->save();
        return redirect('/nilai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show(nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit( $nl_id)
    {
        //
        $nilai = nilai::find($nl_id);
        $guru = user::where('us_level','Guru')->get();
        $siswa = user::where('us_level','Siswa')->get();
        $kelas = kelas::all();
        return view('nilai.edit',compact('nilai','guru','siswa','kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $nl_id)
    {
        //
        $nilai = nilai::find($nl_id);
        $nilai->nl_sw_id = $request['nl_sw_id'];
        $nilai->nl_gr_id = $request['nl_gr_id'];
        $nilai->nl_kls_id = $request['nl_kls_id'];
        $nilai->nl_smst = $request['nl_smst'];
        $nilai->nl_nilai = $request['nl_nilai'];
        $nilai->save();
        return redirect('/nilai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy( $nl_id)
    {
        //
        $nilai = nilai::find($nl_id);
        $nilai->destroy();
        return redirect('/nilai');
    }
}
