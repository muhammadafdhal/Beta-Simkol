<?php

namespace App\Http\Controllers;

use App\user;
use Hash;
use Validator;
use Response;
use Illuminate\Support\Facedes\input;
use Illuminate\Http\Request;

class SiswaController extends Controller{

    public function index(){

        $data['isi'] = user::orderBy('id','DESC')->paginate(5);
        $data['judul'] = "SISWA";
        $data['icon'] = "fas fa-user";

        return view('siswa.index',compact('data'));
    }

    public function addPost(Request $request)
    {

        $rules = array(
            'name' =>'required',
            'email' => 'required',
            'password' => 'required',
            'us_nip_nisn' => 'required',
            'us_alamat' => 'required',
            'us_hp' => 'required',
            'us_level' => 'required',

        );

        $validator = Validator::make (input::all(), $rules);
        if ($validator->fails())
        return response::json(array('error'=> $validator->getMessageBag()->toarrat()));

        else
        {
            $siswa = new user;
            $siswa->name=$request['name'];
        $siswa->email=$request['email'];
        $siswa->password=Hash::make($request['password']);
        $siswa->us_nip_nisn=$request['us_nip_nisn'];
        $siswa->us_alamat=$request['us_alamat'];
        $siswa->us_hp=$request['us_hp'];
        $siswa->us_level=$request['us_level'];
        $siswa->save();
        return response()->json($post);
            
        }
    }

    public function create(){

        $siswa['data'] = user::all();
        $siswa['judul'] = "Tambah Siswa";


        return view ('siswa.create', compact('siswa'));
    }

    public function store(Request $request){
        
        $this->validate($request,[
            'nip'    => 'required',
            'nama'   => 'required',
            'sex'    => 'required',
            'alamat' => 'required'
        ]);

        $siswa = new user;
        $siswa->name=$request['name'];
        $siswa->email=$request['email'];
        $siswa->password=Hash::make($request['password']);
        $siswa->us_nip_nisn=$request['us_nip_nisn'];
        $siswa->us_alamat=$request['us_alamat'];
        $siswa->us_hp=$request['us_hp'];
        $siswa->us_level=$request['us_level'];
        $siswa->save();

        return redirect('siswa.index')->with('message','Data Ditambahkan');
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
