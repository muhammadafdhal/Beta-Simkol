@extends('template.temp')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data guru</h4>

            <form class="form" action="{{route('guru.store')}}" method="POST">
                @csrf
                <input hidden class="form-control" type="password" placeholder="Password" name="password"
                    id="example-number-input" value="12345678">
                <div class="form-group m-t-40 row">
                    <label for="example-text-input" class="col-2 col-form-label">NIP</label>
                    <div class="col-10">
                        <input class="form-control @error('us_nip_nisn') is-invalid @enderror" type="number"
                            value="{{ old('us_nip_nisn')}}" placeholder="NIP" name="us_nip_nisn"
                            id="example-text-input">
                        @error('us_nip_nisn')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-search-input" class="col-2 col-form-label">Nama Lengkap</label>
                    <div class="col-10">
                        <input class="form-control @error('name') is-invalid @enderror" value="{{ old('name')}}"
                            type="text" placeholder="Nama Lengkap" name="name" id="example-search-input">
                        @error('name')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
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
                        <input class="form-control @error('us_alamat') is-invalid @enderror" type="text"
                            placeholder="Alamat" name="us_alamat" id="example-email-input">
                        @error('us_alamat')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-url-input" class="col-2 col-form-label">Telepon</label>
                    <div class="col-10">
                        <input class="form-control @error('us_telp') is-invalid @enderror" type="number"
                            placeholder="Telepon" name="us_tlp" id="example-url-input">
                        @error('us_telp')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Mata Pelajaran</label>
                    <div class="col-10">
                        <select class="custom-select col-12" name="us_mp_id" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>

                            @foreach ($mapel as $t)
                            <option value="{{$t->mp_id}}">{{$t->mp_nama}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label">Keterangan</label>
                    <div class="col-10">
                        <input class="form-control @error('us_keterangan') is-invalid @enderror" type="text"
                            placeholder="Keterangan" name="us_keterangan" id="example-number-input">
                        @error('us_keterangan')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label">Email</label>
                    <div class="col-10">
                        <input class="form-control @error('email') is-invalid @enderror" type="email"
                            placeholder="Email" name="email" id="example-number-input">
                        @error('email')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label">Username</label>
                    <div class="col-10">
                        <input class="form-control @error('username') is-invalid @enderror" type="text"
                            placeholder="Username" name="username" id="example-number-input">
                        @error('username')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn waves-effect waves-light btn-success">Save</button>
                <a href="/guru" class="btn waves-effect waves-light btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>


@endsection
