<?php

namespace App\Http\Controllers;

use App\jadwal_pelajaran;
use App\user;
use App\kelas;
use Illuminate\Http\Request;

class JadwalPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jadwal = jadwal_pelajaran::join('kelas','kls_id','=','jadwal_pelajarans.jad_kls_id')->join('users','id','jad_gr_id')->get();
        // dd($jadwal);
        return view('jadwal.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jadwal = jadwal_pelajaran::join('kelas','kls_id','=','jadwal_pelajarans.jad_kls_id')->join('users','id','=','jadwal_pelajarans.jad_gr_id')->get();
        $guru = user::where('us_level', 'Guru')->get();
        $kelas = kelas::all();
        return view('jadwal.create', compact('jadwal','guru','kelas'));
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
        $jadwal = new jadwal_pelajaran;
        $jadwal->jad_kls_id = $request['jad_kls_id'];
        $jadwal->jad_gr_id = $request['jad_gr_id'];
        $jadwal->jad_hari = $request['jad_hari'];
        $jadwal->jad_jam_pelajaran = $request['jad_jam_pelajaran'];
        $jadwal->save();
        return redirect('/jadwal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jadwal_pelajaran  $jadwal_pelajaran
     * @return \Illuminate\Http\Response
     */
    public function show(jadwal_pelajaran $jadwal_pelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jadwal_pelajaran  $jadwal_pelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit( $jad_id)
    {
        //
        $jadwal = jadwal_pelajaran::find($jad_id);
        $guru = user::where('us_level','Guru')->get();
        $kelas = kelas::all();
        return view('jadwal.edit', compact('jadwal','guru','kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jadwal_pelajaran  $jadwal_pelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $jad_id)
    {
        //
        $jadwal = jadwal_pelajaran::find($jad_id);
        $jadwal->jad_kls_id = $request['jad_kls_id'];
        $jadwal->jad_gr_id = $request['jad_gr_id'];
        $jadwal->jad_hari = $request['jad_hari'];
        $jadwal->jad_jam_pelajaran = $request['jad_jam_pelajaran'];
        $jadwal->save();
        return redirect('/jadwal');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jadwal_pelajaran  $jadwal_pelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(jadwal_pelajaran $jadwal_pelajaran)
    {
        //
    }
}
