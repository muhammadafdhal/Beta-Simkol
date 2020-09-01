@extends('template.temp')

@section('content')

<div class="card col-lg-12">
    <div class="card-body">
        <h4 class="card-title">Data Tabel Siswa</h4>
        <div class="table-responsive m-t-40">
            <div class="row button-group">
                <div class="col-lg-2 col-md-4">
                    <a href="{{route('siswa.create')}}" class="btn btn-rounded btn-info">Tambah Siswa</a>
                </div>
            </div>
            <table id="myTable" class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIS</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Kelas</th>
                        <th>Alamat Ortu</th>
                        <th>Telp. Ortu</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @foreach ($siswa as $t)

                <tbody>
                    <tr>
                        <td>{{$loop->iteration}}.</td>
                        <td>{{$t->us_nip_nisn}}</td>
                        <td>{{$t->name}}</td>
                        <td>{{$t->us_jk}}</td>
                        <td>{{$t->kls_kelas}}</td>
                        <td>{{$t->us_alamat}}</td>
                        <td>{{$t->us_tlp}}</td>
                        <td class="datatable-ct">

                            <form method="POST" action="{{ route('siswa.destroy', $t->id ) }}">
                                {{csrf_field()}} {{method_field('DELETE')}}

                                <a href="{{ route('siswa.edit', $t->id) }}" class="btn btn-info" data-toggle="tooltip"
                                    title="Detail"><i class="ti-eye"></i></a>

                                <a href="{{ route('siswa.edit', $t->id) }}" class="btn btn-info" data-toggle="tooltip"
                                    title="Edit"><i class="ti-pencil"></i></a>
                                    
                                <button type="submit" class="btn btn-danger" data-toggle="tooltip" title="Hapus"><i class="ti-trash"></i></a></button>
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
