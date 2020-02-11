@extends('template.temp')

@section('content')

<div class="card col-lg-12">
    <div class="card-body">
        <h4 class="card-title">Data Tabel Jadwal Pelajaran</h4>
        <div class="table-responsive m-t-40">
            <div class="row button-group">
                <div class="col-lg-2 col-md-4">
                    <a href="{{route('absen.create')}}" class="btn btn-rounded btn-block btn-info">Tambah Jadwal</a>
                </div>
            </div>
            <table id="myTable" class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Siswa</th>
                        <th>Tahun</th>
                        <th>Sakit</th>
                        <th>Izin</th>
                        <th>Alpha</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @php
                    $no=1;
                @endphp
                @foreach ($absen as $t)
        
                <tbody>
                    <tr>
                        <td>{{$no++}}.</td>
                        <td>{{$t->abs_sw_id}}</td>
                        <td>{{$t->created_at}}</td>
                        <td>{{$t->abs_sakit}}</td>
                        <td>{{$t->abs_izin}}</td>
                        <td>{{$t->abs_alpha}}</td>
                        <td>{{$t->abs_ket}}</td>
                        <td class="datatable-ct">
                            <a href="{{ route('absen.edit', $t->abs_id) }}" class="btn btn-info">Edit</a>
                            <br><br>
                            <form method="POST" action="{{ route('absen.destroy', $t->abs_id ) }}">
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
