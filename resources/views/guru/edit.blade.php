@extends('template.temp')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Data Guru</h4>
            <form class="form" action="{{route('guru.update', $guru->id)}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group m-t-40 row">
                    <label for="example-text-input" class="col-2 col-form-label">NIP</label>
                    <div class="col-10">
                    <input class="form-control" type="number" value="{{$guru->us_nip_nisn}}" placeholder="NIP" name="us_nip_nisn"
                            id="example-text-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-search-input" class="col-2 col-form-label">Nama Lengkap</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{$guru->name}}" placeholder="Nama Lengkap" name="name"
                            id="example-search-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-10">
                        <select class="custom-select col-12" name="us_jk" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            <option value="Laki-Laki"<?php if($guru->us_jk == "Laki-Laki") {echo "selected";} ?>>Laki-laki</option>
                            <option value="Perempuan"<?php if($guru->us_jk == "Perempuan") {echo "selected";} ?>>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Jabatan</label>
                    <div class="col-10">
                        <select class="custom-select col-12" name="us_gr_jabatan" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            <option value="Guru Pertama"<?php if($guru->us_gr_jabatan == "Guru Pertama") {echo "selected";} ?>>Guru Pertama</option>
                            <option value="Guru Pertama Tk.1"<?php if($guru->us_gr_jabatan == "Guru Pertama Tk.1") {echo "selected";} ?>>Guru Pertama Tk.1</option>
                            <option value="Guru Muda"<?php if($guru->us_gr_jabatan == "Guru Muda") {echo "selected";} ?>>Guru Muda</option>
                            <option value="Guru Muda Tk.1"<?php if($guru->us_gr_jabatan == "Guru Muda Tk.1") {echo "selected";} ?>>Guru Muda Tk.1</option>
                            <option value="Guru Madya"<?php if($guru->us_gr_jabatan == "Guru Madya") {echo "selected";} ?>>Guru Madya</option>
                            <option value="Guru Madya Tk.1"<?php if($guru->us_gr_jabatan == "Guru Madya Tk.1") {echo "selected";} ?>>Guru Madya Tk.1</option>
                            <option value="Guru Dewasa"<?php if($guru->us_gr_jabatan == "Guru Dewasa") {echo "selected";} ?>>Guru Dewasa</option>
                            <option value="Guru Dewasa Tk.1"<?php if($guru->us_gr_jabatan == "Guru Dewasa Tk.1") {echo "selected";} ?>>Guru Dewasa Tk.1</option>
                            <option value="Guru Pembina"<?php if($guru->us_gr_jabatan == "Guru Pembina") {echo "selected";} ?>>Guru Pembina</option>
                            <option value="Guru Pembina Tk.1"<?php if($guru->us_gr_jabatan == "Guru Pembina Tk.1") {echo "selected";} ?>>Guru Pembina Tk.1</option>
                            <option value="Guru Utama Muda"<?php if($guru->us_gr_jabatan == "Guru Utama Muda") {echo "selected";} ?>>Guru Utama Muda</option>
                            <option value="Guru Utama Madya"<?php if($guru->us_gr_jabatan == "Guru Utama Madya") {echo "selected";} ?>>Guru Utama Madya</option>
                            <option value="Guru Utama"<?php if($guru->us_gr_jabatan == "Guru Utama") {echo "selected";} ?>>Guru Utama</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Golongan</label>
                    <div class="col-10">
                        <select class="custom-select col-12" name="us_gr_golongan" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            <option value="II/a"<?php if($guru->us_gr_golongan == "II/a") {echo "selected";} ?>>II/a</option>
                            <option value="II/b"<?php if($guru->us_gr_golongan == "II/b") {echo "selected";} ?>>II/b</option>
                            <option value="II/c"<?php if($guru->us_gr_golongan == "II/c") {echo "selected";} ?>>II/c</option>
                            <option value="II/d"<?php if($guru->us_gr_golongan == "II/d") {echo "selected";} ?>>II/d</option>
                            <option value="III/a"<?php if($guru->us_gr_golongan == "III/a") {echo "selected";} ?>>III/a</option>
                            <option value="III/b"<?php if($guru->us_gr_golongan == "III/b") {echo "selected";} ?>>III/b</option>
                            <option value="III/c"<?php if($guru->us_gr_golongan == "III/c") {echo "selected";} ?>>III/c</option>
                            <option value="III/d"<?php if($guru->us_gr_golongan == "III/d") {echo "selected";} ?>>III/d</option>
                            <option value="IV/a"<?php if($guru->us_gr_golongan == "IV/a") {echo "selected";} ?>>IV/a</option>
                            <option value="IV/b"<?php if($guru->us_gr_golongan == "IV/b") {echo "selected";} ?>>IV/b</option>
                            <option value="IV/c"<?php if($guru->us_gr_golongan == "IV/c") {echo "selected";} ?>>IV/c</option>
                            <option value="IV/d"<?php if($guru->us_gr_golongan == "IV/d") {echo "selected";} ?>>IV/d</option>
                            <option value="IV/e"<?php if($guru->us_gr_golongan == "IV/e") {echo "selected";} ?>>IV/e</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">Alamat</label>
                    <div class="col-10">
                        <input class="form-control" value="{{$guru->us_alamat}}" type="text" placeholder="Alamat" name="us_alamat"
                            id="example-email-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-url-input" class="col-2 col-form-label">Telepon</label>
                    <div class="col-10">
                        <input class="form-control" value="{{$guru->us_tlp}}" type="number" placeholder="Telepon" name="us_tlp"
                            id="example-url-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-password-input" class="col-2 col-form-label">Id Mapel</label>
                    <div class="col-10">
                        <input class="form-control" value="{{$guru->us_id_mapel}}" type="text" placeholder="Id Mapel" name="us_id_mapel"
                            id="example-password-input" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label">Keterangan</label>
                    <div class="col-10">
                        <input class="form-control" value="{{$guru->us_keterangan}}" type="text" placeholder="Keterangan" name="us_keterangan"
                            id="example-number-input">
                    </div>
                </div>
                {{-- <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label">Email</label>
                    <div class="col-10">
                        <input class="form-control" type="email" placeholder="Email" name="email"
                            id="example-number-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label">Username</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Username" name="username"
                            id="example-number-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label">Password</label>
                    <div class="col-10">
                        <input class="form-control" type="password" placeholder="Password" name="password"
                            id="example-number-input">
                    </div>
                </div> --}}
                <button type="submit" class="btn waves-effect waves-light btn-success">Save</button>
                <a href="/guru" class="btn waves-effect waves-light btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>

    
@endsection