<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class ProfilController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $profil = user::all();
        return view('profil.index', compact('profil'));
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
    public function edit($id)
    {
        //
        $profil = user::findOrFail($id);
        return view('profil.index', compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $profil = user::find($id);
        $profil->name = $request['name'];
        $profil->username = $request['username'];
        $profil->email = $request['email'];
        $profil->us_tlp = $request['us_tlp'];
        $profil->us_alamat = $request['us_alamat'];
        $profil->save();
        return redirect('/');
    }

    public function edit_password($id)
    {
        //
        $profil = user::findOrFail($id);
        return view('profil.setting_password', compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function update_password(Request $request)
    {
        //
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        return redirect('/')->with('password','Password berhasil diubah');
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
