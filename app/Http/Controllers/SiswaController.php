<?php

namespace App\Http\Controllers;
use App\user;
use App\siswa;
use App\kelas;
use Hash;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index()
    {
        //
        $siswa = user::join('kelas','kls_id','us_sw_kls_id')->where('us_level', 'siswa')->get();
        $kelas = kelas::all();
        return view('siswa.index', compact('siswa','kelas'));
    }

    public function create()
    {
        //
        $siswa = user::join('kelas','kls_id','us_sw_kls_id')->get();
        $kelas = kelas::all();
        return view('siswa.create', compact('siswa','kelas'));
    }

    
    public function store(Request $request)
    {
        //
        $siswa = new user;
        $siswa->us_sw_kls_id = $request['us_sw_kls_id'];
        $siswa->us_nip_nisn=$request['us_nip_nisn'];
        $siswa->name = $request['name'];
        $siswa->us_jk = $request['us_jk'];
        $siswa->us_agama = $request['us_agama'];
        $siswa->us_tmp_lahir = $request['us_tmp_lahir'];
        $siswa->us_tgl_lahir = $request['us_tgl_lahir'];
        $siswa->us_sw_nama_ortu = $request['us_sw_nama_ortu'];
        $siswa->us_alamat = $request['us_alamat'];
        $siswa->us_keterangan = $request['us_keterangan'];
        $siswa->us_level = 'Siswa';
        $siswa->email = $request['email'];
        $siswa->username = $request['username'];
        $siswa->password = Hash::make($request['password']);
        $siswa->us_tlp = $request['us_tlp'];
        $siswa->save();
        return redirect('/siswa');

    }

    
    public function show(nilai $nilai)
    {
        //
    }

    
    public function edit( $id)
    {
        //
        $siswa = user::find($id);
        $kelas = kelas::all();
        return view('siswa.edit', compact('siswa','kelas'));
    }

    
    public function update(Request $request, $id)
    {
        //
        $siswa = user::find($id);
        $siswa->us_sw_kls_id = $request['us_sw_kls_id'];
        $siswa->us_nip_nisn=$request['us_nip_nisn'];
        $siswa->name = $request['name'];
        $siswa->us_jk = $request['us_jk'];
        $siswa->us_agama = $request['us_agama'];
        $siswa->us_tmp_lahir = $request['us_tmp_lahir'];
        $siswa->us_tgl_lahir = $request['us_tgl_lahir'];
        $siswa->us_sw_nama_ortu = $request['us_sw_nama_ortu'];
        $siswa->us_alamat = $request['us_alamat'];
        $siswa->us_keterangan = $request['us_keterangan'];
        $siswa->us_level = 'Siswa';
        $siswa->us_tlp = $request['us_tlp'];
        $siswa->save();
        return redirect('/siswa');
    }

    
    public function destroy( $nilai)
    {
        //
        $siswa = user::find($id);
        $siswa->destroy();
        return redirect('/siswa');
    }
}
