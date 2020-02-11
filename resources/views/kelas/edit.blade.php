@extends('template.temp')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Data Kelas</h4>
            <form class="form" action="{{route('kelas.update', $kelas->kls_id)}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group m-t-40 row">
                    <label for="example-text-input" class="col-2 col-form-label">Kelas</label>
                    <div class="col-10">
                    <input class="form-control" type="text" value="{{$kelas->kls_kelas}}" placeholder="Judul" name="kls_kelas"
                            id="example-text-input">
                    </div>
                </div>
                
                <button type="submit" class="btn waves-effect waves-light btn-success">Save</button>
                <a href="/kelas" class="btn waves-effect waves-light btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>

    
@endsection