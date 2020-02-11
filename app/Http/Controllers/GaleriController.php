<?php

namespace App\Http\Controllers;

use App\galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $galeri = galeri::all();
        return view('galeri.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $galeri = galeri::all();
        return view('galeri.create', compact('galeri'));
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
        $file=$request->file('gl_gambar');
        $content=File::get($file);
        $ekstensi=$file->getClientOriginalExtension();
        $namafile='gl'.Auth::user()->id.'-'.time().'.'.$ekstensi;
        $glfile=url("storage/gl/{$namafile}");
        Storage::disk('local')->put('galeri/'.$namafile, $content);

        $galeri = new galeri;
        $galeri->gl_judul = $request['gl_judul'];
        $galeri->gl_gambar = $glfile;
        $galeri->save();
        return redirect('/galeri');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(galeri $galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, galeri $galeri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy( $gl_id)
    {
        //
        $galeri = galeri::find($gl_id);
        $galeri->delete();
        return redirect('/galeri');
    }
}
