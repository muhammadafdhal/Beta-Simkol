<?php

namespace App\Http\Controllers;

use App\materi;
use App\user;
use Illuminate\Http\Request;

class MateriController extends Controller
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
        $materi = materi::join('users','users.id','=','materis.mt_gr_id')->where('users.us_level','Guru')->get();
        return view('materi.index', compact('materi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $materi = materi::join('users','users.id','=','materis.mt_gr_id')->get();
        $user = user::where('us_level','Guru')->get();
        return view('materi.create', compact('materi', 'user'));
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
        $materi = new materi;
        $materi->mt_gr_id = $request['mt_gr_id'];
        $materi->mt_judul = $request['mt_judul'];
        $materi->mt_materi = $request['mt_materi'];
        $materi->save();
        return redirect('/materi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show(materi $materi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit( $mt_id)
    {
        //
        $materi = materi::find($mt_id);
        $user = user::where('us_level','Guru')->get();

        return view('/materi.edit', compact('materi','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $mt_id)
    {
        //
        $materi = materi::find($mt_id);
        $materi->mt_judul = $request['mt_judul'];
        $materi->mt_gr_id = $request['mt_gr_id'];
        $materi->mt_materi = $request['mt_materi'];
        $materi->save();

        return redirect('/materi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(materi $materi)
    {
        //
    }
}
