@extends('template.temp')

@section('content')

<div class="card col-lg-12">
    <div class="card-body">
        <h4 class="card-title">Data Tabel Tamu</h4>
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
                        <th>Pengirim</th>
                        <th>Tanggal</th>
                        <th>Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @php
                    $no=1;
                @endphp
                @foreach ($tamu as $t)
        
                <tbody>
                    <tr>
                        <td>{{$no++}}.</td>
                        <td>{{$t->bt_pengirim}}</td>
                        <td>{{$t->created_at}}</td>
                        <td>{{$t->bt_pesan}}</td>
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
