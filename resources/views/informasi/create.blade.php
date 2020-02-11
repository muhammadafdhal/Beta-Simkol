@extends('template.temp')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Informasi</h4>
            
            <form class="form" action="{{route('informasi.store')}}" method="POST">
                @csrf
                <div class="form-group m-t-40 row">
                    <label for="example-text-input" class="col-2 col-form-label">Judul Informasi</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Isi Judul" name="is_judul"
                            id="example-text-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-search-input" class="col-2 col-form-label">Isi Informasi</label>
                    <div class="col-10">
                        <textarea class="form-control" type="text" placeholder="Isi Informasi" name="is_isi"
                            id="example-search-input"></textarea>
                    </div>
                </div>
                
                <button type="submit" class="btn waves-effect waves-light btn-success">Save</button>
                <a href="/informasi" class="btn waves-effect waves-light btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>


@endsection
