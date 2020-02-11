<?php

namespace App\Http\Controllers;

use App\absensiswa;
use App\user;
use Illuminate\Http\Request;

class AbsensiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $absen = absensiswa::join('users','id','abs_sw_id')->get();
        return view('absen.index', compact('absen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $absen = absensiswa::join('users','id','abs_sw_id')->get();
        $siswa = user::where('us_level','Siswa')->get();
        return view('absen.create', compact('absen','siswa'));
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
        $absen = new absensiswa;
        $absen->abs_sw_id = $request['abs_sw_id'];
        $absen->abs_sakit = $request['abs_sakit'];
        $absen->abs_izin = $request['abs_izin'];
        $absen->abs_alpha = $request['abs_alpha'];
        $absen->abs_ket = $request['abs_ket'];
        $absen->save();
        return redirect('/absen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\absensiswa  $absensiswa
     * @return \Illuminate\Http\Response
     */
    public function show(absensiswa $absensiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\absensiswa  $absensiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(absensiswa $absensiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\absensiswa  $absensiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, absensiswa $absensiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\absensiswa  $absensiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(absensiswa $absensiswa)
    {
        //
    }
}
