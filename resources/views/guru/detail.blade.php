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

            <table class="table table-bordered table-striped">

                <thead>
                    <tr> 
                        <td>NIP</td>
                        <td>: {{$guru->us_nip_nisn}}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>: {{$guru->name}}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: {{$guru->us_alamat}}</td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td>: {{$guru->us_tlp}}</td>
                    </tr>
                    <tr>
                        <td>Mata Pelajaran</td>
                        <td>: {{$guru->mp_nama}}</td>
                    </tr>
                </thead>
            </table>
            <a href="{{ url('/guru')}}" class="btn btn-danger">Kembali</a>
        </div>
    </div>
</div>
@endsection
