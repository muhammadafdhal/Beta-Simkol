@extends('template.temp')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Materi</h4>

            <form class="form" action="{{route('galeri.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group m-t-40 row">
                    <label for="example-text-input" class="col-2 col-form-label">Judul</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Judul" name="gl_judul"
                            id="example-text-input" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Custom File upload</label>
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput">
                            <i class="fa fa-file fileinput-exists"></i>
                            <span class="fileinput-filename"></span>
                        </div>
                        <span class="input-group-addon btn btn-secondary btn-file">
                            <span class="fileinput-new">Select file</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="gl_gambar" accept=".jpg,.jpeg,.png">
                        </span>
                        <a href="#" class="input-group-addon btn btn-secondary fileinput-exists"
                            data-dismiss="fileinput">Remove</a>
                    </div>
                </div>

                <button type="submit" class="btn waves-effect waves-light btn-success">Save</button>
                <a href="/galeri" class="btn waves-effect waves-light btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>


@endsection
