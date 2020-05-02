<?php

namespace App\Http\Controllers;

use App\mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $mapel = mapel::all();
        return view('mata-pelajaran.index',compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $mapel = mapel::all();
        return view('mata-pelajaran.create', compact('mapel'));
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
        $mapel = new mapel;
        $mapel->mp_nama = $request['mp_nama'];
        $mapel->mp_ket = $request['mp_ket'];
        $mapel->save();
        return redirect('/mata-pelajaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show(mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function edit($mp_id)
    {
        //
        $mapel = mapel::find($mp_id);
        return view('mata-pelajaran.edit', compact('mapel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $mp_id)
    {
        //
        $mapel = mapel::find($mp_id);
        $mapel->mp_nama = $request['mp_nama'];
        $mapel->mp_ket = $request['mp_ket'];
        $mapel->save();
        return redirect('/mata-pelajaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function destroy(mapel $mp_id)
    {
        //
        $mapel = mapel::find($mp_id);
        $mapel->destroy();
        return redirect('/mata-pelajaran');

    }
}
