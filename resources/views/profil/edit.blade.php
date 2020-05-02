@extends('template.temp')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Data Siswa</h4>
            <form class="form" action="{{route('siswa.update', $siswa->id)}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group m-t-40 row">
                    <label for="example-text-input" class="col-2 col-form-label">NIS</label>
                    <div class="col-10">
                    <input class="form-control" type="number" value="{{$siswa->us_nip_nisn}}" placeholder="NIS" name="us_nip_nisn"
                            id="example-text-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Kelas</label>
                    <div class="col-10">
                        <select class="custom-select col-12" name="us_sw_kls_id" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>

                            @foreach ($kelas as $t)
                            <option value="{{$t->kls_id}}"<?php if($t->kls_id == $siswa->us_sw_kls_id) {echo "selected";} ?>>{{$t->kls_kelas}}</option>
                            @endforeach 
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-search-input" class="col-2 col-form-label">Nama Lengkap</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Nama Lengkap" value="{{$siswa->name}}" name="name"
                            id="example-search-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-10">
                        <select class="custom-select col-12" name="us_jk" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            <option value="Laki-Laki"<?php if ($siswa->us_jk == "Laki-Laki") {echo "selected";} ?>>Laki-laki</option>
                            <option value="Perempuan"<?php if($siswa->us_jk == "Perempuam") {echo "selected";} ?>>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Jabatan</label>
                    <div class="col-10">
                        <select class="custom-select col-12" name="us_agama" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            <option value="Islam"<?php if($siswa->us_agama == "Islam") {echo "selected";} ?>>Islam</option>
                            <option value="Kriten"<?php if($siswa->us_agama == "Kriten") {echo "selected";} ?>>Kriten</option>
                            <option value="Katholik"<?php if($siswa->us_agama == "Katholik") {echo "selected";} ?>>Katholik</option>
                            <option value="Hindu"<?php if($siswa->us_agama == "Hindu" ){echo "selected";} ?>>Hindu</option>
                            <option value="Buddha"<?php if($siswa->us_agama == "Buddha" ) {echo "selected";} ?>>Buddha</option>
                            <option value="Konghucu"<?php if($siswa->us_agama == "Konghucu" ) {echo "selected";} ?>>Konghucu</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">Tempat Lahir</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Tempat Lahir" value="{{$siswa->us_tmp_lahir}}" name="us_tmp_lahir"
                            id="example-email-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-10">
                        <input class="form-control" type="date" placeholder="Tanggal Lahir" value="{{$siswa->us_tgl_lahir}}" name="us_tgl_lahir"
                            id="example-email-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-password-input" class="col-2 col-form-label">Nama Orangtua</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Nama Orangtua" value="{{$siswa->us_sw_nama_ortu}}" name="us_sw_nama_ortu"
                            id="example-password-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">Alamat Orangtua</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Alamat" value="{{$siswa->us_alamat}}" name="us_alamat"
                            id="example-email-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-url-input" class="col-2 col-form-label">Telepon Orangtua</label>
                    <div class="col-10">
                        <input class="form-control" type="number" placeholder="Telepon" value="{{$siswa->us_tlp}}" name="us_tlp"
                            id="example-url-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label">Keterangan</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Keterangan" value="{{$siswa->us_keterangan}}" name="us_keterangan"
                            id="example-number-input">
                    </div>
                </div>
                
                <button type="submit" class="btn waves-effect waves-light btn-success">Save</button>
                <a href="/siswa" class="btn waves-effect waves-light btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>

    
@endsection