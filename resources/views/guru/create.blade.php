@extends('template.temp')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data guru</h4>
            
            <form class="form" action="{{route('guru.store')}}" method="POST">
                @csrf
                <div class="form-group m-t-40 row">
                    <label for="example-text-input" class="col-2 col-form-label">NIP</label>
                    <div class="col-10">
                        <input class="form-control" type="number" placeholder="NIP" name="us_nip_nisn"
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
                        <select class="custom-select col-12" name="us_gr_jabatan" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            <option value="Guru Pertama">Guru Pertama</option>
                            <option value="Guru Pertama Tk.1">Guru Pertama Tk.1</option>
                            <option value="Guru Muda">Guru Muda</option>
                            <option value="Guru Muda Tk.1">Guru Muda Tk.1</option>
                            <option value="Guru Madya">Guru Madya</option>
                            <option value="Guru Madya Tk.1">Guru Madya Tk.1</option>
                            <option value="Guru Dewasa">Guru Dewasa</option>
                            <option value="Guru Dewasa Tk.1">Guru Dewasa Tk.1</option>
                            <option value="Guru Pembina">Guru Pembina</option>
                            <option value="Guru Pembina Tk.1">Guru Pembina Tk.1</option>
                            <option value="Guru Utama Muda">Guru Utama Muda</option>
                            <option value="Guru Utama Madya">Guru Utama Madya</option>
                            <option value="Guru Utama">Guru Utama</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Golongan</label>
                    <div class="col-10">
                        <select class="custom-select col-12" name="us_gr_golongan" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            <option value="II/a">II/a</option>
                            <option value="II/b">II/b</option>
                            <option value="II/c">II/c</option>
                            <option value="II/d">II/d</option>
                            <option value="III/a">III/a</option>
                            <option value="III/b">III/b</option>
                            <option value="III/c">III/c</option>
                            <option value="III/d">III/d</option>
                            <option value="IV/a">IV/a</option>
                            <option value="IV/b">IV/b</option>
                            <option value="IV/c">IV/c</option>
                            <option value="IV/d">IV/d</option>
                            <option value="IV/e">IV/e</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">Alamat</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Alamat" name="us_alamat"
                            id="example-email-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-url-input" class="col-2 col-form-label">Telepon</label>
                    <div class="col-10">
                        <input class="form-control" type="number" placeholder="Telepon" name="us_tlp"
                            id="example-url-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-password-input" class="col-2 col-form-label">Id Mapel</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Id Mapel" name="us_id_mapel"
                            id="example-password-input" disabled>
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
                <a href="/guru" class="btn waves-effect waves-light btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>


@endsection
