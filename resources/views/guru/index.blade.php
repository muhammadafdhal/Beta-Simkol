@extends('template.temp')

@section('content')

<div class="card col-lg-12">
    <div class="card-body">
        <h4 class="card-title">Data Tabel Guru</h4>
        <div class="table-responsive m-t-40">
            <div class="row button-group">
                <div class="col-lg-2 col-md-4">
                    <a href="{{route('guru.create')}}" class="btn btn-rounded btn-block btn-info">Tambah Guru</a>
                </div>
            </div>
            <table id="myTable" class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Jabatan</th>
                        <th>Golongan</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Mata Pelajaran</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @php
                    $no=1;
                @endphp
                @foreach ($guru as $t)
        
                <tbody>
                    <tr>
                        <td>{{$no++}}.</td>
                        <td>{{$t->us_nip_nisn}}</td>
                        <td>{{$t->name}}</td>
                        <td>{{$t->us_jk}}</td>
                        <td>{{$t->us_gr_jabatan}}</td>
                        <td>{{$t->us_gr_golongan}}</td>
                        <td>{{$t->us_alamat}}</td>
                        <td>{{$t->us_tlp}}</td>
                        <td>{{$t->mp_nama}}</td>
                        <td>{{$t->us_keterangan}}</td>
                        <td class="datatable-ct">
                            <a href="{{ route('guru.edit', $t->id) }}" class="btn btn-info">Edit</a>
                            <br><br>
                            <form method="POST" action="{{ route('guru.destroy', $t->id ) }}">
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
