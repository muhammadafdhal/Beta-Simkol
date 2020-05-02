<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Http\Model\mapel;
use Hash;

class GuruController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $guru = user::join('mapels','mp_id','us_mp_id')->where('us_level', 'Guru')->get();
        return view('guru.index', compact('guru'));
    }

    public function create()
    {
        //
        $guru = user ::all();
        $mapel = mapel::all();
        return view('guru.create', compact('guru','mapel'));
    }

    
    public function store(Request $request)
    {
        // cara 1 =======================================
        // $guru = new user();
        // $guru->email=$request['email'];
        // $guru->username=$request['username'];
        // $guru->password=Hash::make($request['password']);
        // $guru->us_nip_nisn=$request['us_nip_nisn'];
        // $guru->name=$request['name'];
        // $guru->us_jk=$request['us_jk'];
        // $guru->us_gr_jabatan=$request['us_gr_jabatan'];
        // $guru->us_gr_golongan=$request['us_gr_golongan'];
        // $guru->us_alamat=$request['us_alamat'];
        // $guru->us_tlp=$request['us_tlp'];
        // $guru->us_keterangan=$request['us_keterangan'];
        // $guru->us_level='Guru';
        // $guru->us_mp_id=$request['us_mp_id'];
        // $guru->save();

        // cara 2 ============================================
        // user::create($request->all());

        //cara 3 =============================================
        user::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'us_nip_nisn' => $request->us_nip_nisn,
            'name' => $request->name,
            'us_jk' => $request->us_jk,
            'us_gr_jabatan' => $request->us_gr_jabatan,
            'us_gr_golongan' => $request->us_gr_golongan,
            'us_alamat' => $request->us_alamat,
            'us_tlp' => $request->us_tlp,
            'us_keterangan' => $request->us_keterangan,
            'us_level' => 'Guru',
            'us_mp_id' => $request->us_mp_id,
        ]);

        return redirect('/guru')->with('status-guru','Data Berhasil Ditambahkan');



    }

    
    public function show( $nilai)
    {
        //
    }

    
    public function edit( $id)
    {
        //
        $guru = user::find($id);
        $mapel = mapel::all();
        return view('guru.edit', compact('guru','mapel'));
    }

    
    public function update(Request $request,  $id)
    {
        //
        $guru = user::find($id);
        // $guru->email=$request['email'];
        // $guru->username=$request['username'];
        // $guru->password=$request['password'];
        $guru->us_nip_nisn=$request['us_nip_nisn'];
        $guru->name=$request['name'];
        $guru->us_jk=$request['us_jk'];
        $guru->us_gr_jabatan=$request['us_gr_jabatan'];
        $guru->us_gr_golongan=$request['us_gr_golongan'];
        $guru->us_alamat=$request['us_alamat'];
        $guru->us_tlp=$request['us_tlp'];
        $guru->us_keterangan=$request['us_keterangan'];
        $guru->us_mp_id=$request['us_mp_id'];
        $guru->save();
        return redirect('/guru');
    }

    
    public function destroy( $id)
    {
        //
        $guru = user::find($id);
        $guru->delete();
        return redirect('/guru');
    }
}
