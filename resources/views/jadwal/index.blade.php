@extends('template.temp')

@section('content')

<div class="card col-lg-12">
    <div class="card-body">
        <h4 class="card-title">Data Tabel Jadwal Pelajaran</h4>
        <div class="table-responsive m-t-40">
            <div class="row button-group">
                <div class="col-lg-2 col-md-4">
                    <a href="{{route('jadwal.create')}}" class="btn btn-rounded btn-info">Tambah Jadwal</a>
                </div>
            </div>
            <table id="myTable" class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kelas</th>
                        <th>Hari</th>
                        <th>Guru</th>
                        <th>Jam Pelajaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @php
                    $no=1;
                @endphp
                @foreach ($jadwal as $t)
        
                <tbody>
                    <tr>
                        <td>{{$no++}}.</td>
                        <td>{{$t->kls_kelas}}</td>
                        <td>{{$t->jad_hari}}</td>
                        <td>{{$t->name}}</td>
                        <td>{{$t->jad_jam_pelajaran}}</td>
                        <td class="datatable-ct">
                            <a href="{{ route('jadwal.edit', $t->jad_id) }}" class="btn btn-info">Edit</a>
                            <br><br>
                            <form method="POST" action="{{ route('jadwal.destroy', $t->jad_id ) }}">
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
