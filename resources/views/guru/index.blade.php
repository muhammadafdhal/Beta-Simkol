@extends('template.temp')

@section('content')

<div class="card col-lg-12">
    <div class="card-body">
        <h4 class="card-title">Data Tabel Guru</h4>
        <div class="table-responsive m-t-40">

            @if (session('status-guru'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status-guru') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

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
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Mata Pelajaran</th>

                        <th>Aksi</th>
                    </tr>
                </thead>

                @foreach ($guru as $t)

                <tbody align="center">
                    <tr>
                        <td>{{$loop->iteration}}.</td>
                        <td>{{$t->us_nip_nisn}}</td>
                        <td>{{$t->name}}</td>
                        <td>{{$t->us_alamat}}</td>
                        <td>{{$t->us_tlp}}</td>
                        <td>{{$t->mp_nama}}</td>

                        <td class="datatable-ct">


                            <form method="POST" action="{{ route('guru.destroy', $t->id ) }}">
                                {{csrf_field()}} {{method_field('DELETE')}}

                                <a href="{{ route('guru.show', $t->id) }}" class="btn btn-info" data-toggle="tooltip"
                                    title="Detail"><i class="ti-eye"></i></a>

                                <a href="{{ route('guru.edit', $t->id) }}" class="btn btn-info" data-toggle="tooltip"
                                    title="Edit"><i class="ti-pencil"></i></a>

                                <button type="submit" class="btn btn-danger" data-toggle="tooltip" title="Hapus"><i
                                        class="ti-trash"></i></a></button>
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
