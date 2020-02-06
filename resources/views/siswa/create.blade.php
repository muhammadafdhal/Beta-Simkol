@extends('template.temp')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Siswa</h4>
            
            <form class="form" action="{{route('siswa.store')}}" method="POST">
                @csrf
                <div class="form-group m-t-40 row">
                    <label for="example-text-input" class="col-2 col-form-label">NIS</label>
                    <div class="col-10">
                        <input class="form-control" type="number" placeholder="NIS" name="us_nip_nisn"
                            id="example-text-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-search-input" class="col-2 col-form-label">Nama Lengkap</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Nama Lengkap" name="name"
                            id="example-search-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-10">
                        <select class="custom-select col-12" name="us_jk" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            <option value="Laki-Laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Jabatan</label>
                    <div class="col-10">
                        <select class="custom-select col-12" name="us_agama" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kriten">Kriten</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">Tempat Lahir</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Tempat Lahir" name="us_tmp_lahir"
                            id="example-email-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-10">
                        <input class="form-control" type="date" placeholder="Tanggal Lahir" name="us_tgl_lahir"
                            id="example-email-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-password-input" class="col-2 col-form-label">Nama Orangtua</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Nama Orangtua" name="us_sw_nama_ortu"
                            id="example-password-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">Alamat Orangtua</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Alamat" name="us_alamat"
                            id="example-email-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-url-input" class="col-2 col-form-label">Telepon Orangtua</label>
                    <div class="col-10">
                        <input class="form-control" type="number" placeholder="Telepon" name="us_tlp"
                            id="example-url-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label">Keterangan</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Keterangan" name="us_keterangan"
                            id="example-number-input">
                    </div>
                </div>
                <div class="form-group row">
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
                </div>
                <button type="submit" class="btn waves-effect waves-light btn-success">Save</button>
                <a href="/materi" class="btn waves-effect waves-light btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>


@endsection
