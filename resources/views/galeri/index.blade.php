@extends('template.temp')

@section('content')

<div class="card col-lg-12">
    <div class="card-body">
        <h4 class="card-title">Data Tabel Materi</h4>
        <div class="table-responsive m-t-40">
            <div class="row button-group">
                <div class="col-lg-2 col-md-4">
                    <a href="{{route('galeri.create')}}" class="btn btn-rounded btn-block btn-info">Tambah Galeri</a>
                </div>
            </div>
            <table id="myTable" class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @php
                    $no=1;
                @endphp
                @foreach ($galeri as $t)
        
                <tbody>
                    <tr>
                        <td>{{$no++}}.</td>
                        <td>{{$t->gl_judul}}</td>
                    <td>
                        <a data-fancybox="gallery" href="{{ $t->gl_gambar }}">
                        <img src="{{$t->gl_gambar}}" alt="Galeri" width="100px"></td>
                        <td class="datatable-ct">
                            <a href="{{ route('galeri.edit', $t->gl_id) }}" class="btn btn-info">Edit</a>
                            <br><br>
                            <form method="POST" action="{{ route('galeri.destroy', $t->gl_id ) }}">
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
