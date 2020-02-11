@extends('template.temp')

@section('content')

<div class="card col-lg-12">
    <div class="card-body">
        <h4 class="card-title">Data Tabel Nilai</h4>
        <div class="table-responsive m-t-40">
            <div class="row button-group">
                <div class="col-lg-2 col-md-4">
                    <a href="{{route('nilai.create')}}" class="btn btn-rounded btn-block btn-info">Tambah</a>
                </div>
            </div>
            <table id="myTable" class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Siswa</th>
                        <th>Kelas</th>
                        <th>Semester</th>
                        <th>Nilai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @php
                    $no=1;
                @endphp
                @foreach ($nilai as $t)
        
                <tbody>
                    <tr>
                        <td>{{$no++}}.</td>
                        <td>{{$t->name}}</td>
                        <td>{{$t->kls_kelas}}</td>
                        <td>{{$t->nl_smst}}</td>
                        <td>{{$t->nl_nilai}}</td>
                        <td class="datatable-ct">
                            <a href="{{ route('nilai.edit', $t->nl_id) }}" class="btn btn-info">Edit</a>
                            <br><br>
                            <form method="POST" action="{{ route('nilai.destroy', $t->nl_id ) }}">
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
