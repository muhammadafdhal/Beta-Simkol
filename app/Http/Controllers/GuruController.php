<?php

namespace App\Http\Controllers;

use App\dosen;
use Illuminate\Http\Request;

class GuruController extends Controller{

    public function index(){

        $data = dosen::orderBy('id','DESC')->paginate(5);
        $data = ['judul','Data Dosen'];

        return view('guru.index', compact('data'));
    }

    public function create(){

        return view ('guru.create');
    }


    public function store(Request $request){
        
        $this->validate($request,[
            'nip'    => 'required',
            'nama'   => 'required',
            'sex'    => 'required',
            'alamat' => 'required'
        ]);

        $data = dosen::create($request->all());

        return redirect('dosen.index')->with('message','Data Ditambahkan');
    }

    public function show($id){

        $data = dosen::findOrFail($id);
        return view('dosen.show',compact('data'));
    }


    public function edit($id){

        $data = dosen::findOrFail($id);
        return view('dosen.edit',compact('data'));

    }

    public function update(Request $request, $id){

        $this->validate($request, [
            'nip'     => 'required',
            'nama'   => 'required',
            'sex'     => 'required',
            'alamat'     => 'required'
        ]);

        $data = dosen::findOrFail($id)->update ($request->all());

        return redirect()->route('dosen.index')->with('message','Berhasil diubah');
    }

    public function destroy(dosen $dosen){

        $data =  dosen:: findOrFail($id)->delete();
        return redirect()->route('dosen.index')->with('message','Berhasil dihapus');
    }
}
