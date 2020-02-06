@extends('template.temp')

@section('content')

<div class="card col-lg-12">
    <div class="card-body">
        <h4 class="card-title">Data Tabel Siswa</h4>
        <div class="table-responsive m-t-40">
            <div class="row button-group">
                <div class="col-lg-2 col-md-4">
                    <a href="{{route('siswa.create')}}" class="btn btn-rounded btn-block btn-info">Tambah Guru</a>
                </div>
            </div>
            <table id="myTable" class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIS</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Id Kelas</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Nama Ortu</th>
                        <th>Alamat Ortu</th>
                        <th>Telp. Ortu</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @php
                    $no=1;
                @endphp
                @foreach ($siswa as $t)
        
                <tbody>
                    <tr>
                        <td>{{$no++}}.</td>
                        <td>{{$t->us_nip_nisn}}</td>
                        <td>{{$t->name}}</td>
                        <td>{{$t->us_jk}}</td>
                        <td>{{$t->us_agama}}</td>
                        <td>Kelas</td>
                        <td>{{$t->us_tmp_lahir}}</td>
                        <td>{{$t->us_tgl_lahir}}</td>
                        <td>{{$t->us_sw_nama_ortu}}</td>
                        <td>{{$t->us_alamat}}</td>
                        <td>{{$t->us_tlp}}</td>
                        <td>{{$t->us_keterangan}}</td>
                        <td class="datatable-ct">
                            <a href="{{ route('siswa.edit', $t->id) }}" class="btn btn-info">Edit</a>
                            <br><br>
                            <form method="POST" action="{{ route('siswa.destroy', $t->id ) }}">
                                {{csrf_field()}} {{method_field('DELETE')}}

                                <button type="submit" class="btn btn-dark">Hapus</a></button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
