@extends('template.temp')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Materi</h4>

            <form class="form" action="{{route('mata-pelajaran.store')}}" method="POST">
                @csrf
                <div class="form-group m-t-40 row">
                    <label for="example-text-input" class="col-2 col-form-label">Nama Mata pelajaran</label>
                    <div class="col-10">
                        <input class="form-control @error('mp_nama') is-invalid @enderror" value="{{old('mp_nama')}}"
                            type="text" placeholder="Nama Mata pelajaran" name="mp_nama" id="example-text-input">

                        @error('mp_nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">Keterangan</label>
                    <div class="col-10">
                        <input class="form-control @error('mp_ket') is-invalid @enderror" value="{{old('mp_ket')}}"
                            type="text" placeholder="Keterangan" name="mp_ket" id="example-email-input">

                        @error('mp_ket')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn waves-effect waves-light btn-success">Tambah</button>
                <a href="/mata-pelajaran" class="btn waves-effect waves-light btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>


@endsection
