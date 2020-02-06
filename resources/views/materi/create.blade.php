@extends('template.temp')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Materi</h4>
            
            <form class="form" action="{{route('materi.store')}}" method="POST">
                @csrf
                <div class="form-group m-t-40 row">
                    <label for="example-text-input" class="col-2 col-form-label">Judul</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Judul" name="mt_judul"
                            id="example-text-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Guru</label>
                    <div class="col-10">
                        
                        <select class="custom-select col-12" name="mt_gr_id" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            @foreach ($user as $t)
                            <option value="{{$t->id}}">{{$t->name}}</option>
                            @endforeach
                        </select>
                        
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">Materi</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Materi" name="mt_materi"
                            id="example-email-input">
                    </div>
                </div>
                
                <button type="submit" class="btn waves-effect waves-light btn-success">Save</button>
                <a href="/materi" class="btn waves-effect waves-light btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>


@endsection
