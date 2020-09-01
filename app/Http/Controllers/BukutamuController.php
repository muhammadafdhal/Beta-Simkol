<?php

namespace App\Http\Controllers;

use App\Http\Model\bukutamu;
use Illuminate\Http\Request;

class BukutamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tamu = bukutamu::all();
        return view('buku-tamu.index', compact('tamu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function show(bukutamu $bukutamu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function edit(bukutamu $bukutamu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bukutamu $bukutamu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function destroy(bukutamu $bukutamu)
    {
        //
    }
}
