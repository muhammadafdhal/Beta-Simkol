@extends('template.temp')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="{{$data['icon']}}"></i> {{$data['judul']}}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    {{-- <div class="pull-right"> <a href="/siswa/tambah" class="btn btn-success">Tambah Data </a></div>
                    <br><br> --}}
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
                        Tambah Data
                    </button>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                  
                      
                  
                    <table class="table table-bordered table-hover list-data">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>NIP/NISN</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        @php
                        $no = 1;
                        @endphp

                        @foreach ($data['isi'] as $t)
                        <tbody>
                            <tr>
                            <th>{{$no++}}.</th>
                            <th>{{$t->name}}</th>
                                <th>{{$t->email}}</th>
                                <th>{{$t->us_nip_nisn}}</th>
                                <th>{{$t->us_alamat}}</th>
                                <th>{{$t->us_hp}}</th>
                                <th>{{$t->us_level}}</th>
                                <th>Aksi</th>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                  @csrf

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nip/Nisn</label>
                        <input type="number" name="us_nip_nisn" class="form-control" id="us_nip_nisn" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Lengkap</label>
                        <input type="text" name="us_alamat" class="form-control" id="us_alamat" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">No HP</label>
                        <input type="number" name="us_hp" class="form-control" id="us_hp" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Level</label>
                        <select class="form-control" name="us_level" id="us_level">
                          <option value="siswa">Siswa</option>
                          <option value="guru">Guru</option>
                          <option value="admin">Admin</option>
                        </select>

                    </div>


                    {{-- <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>
                    </div> --}}

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" id="add" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection
