@extends('template.temp')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Nilai</h4>
            
            <form class="form" action="{{route('nilai.store')}}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Siswa</label>
                    <div class="col-10">
                        
                        <select class="custom-select col-12" name="nl_sw_id" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            @foreach ($siswa as $t)
                            <option value="{{$t->id}}">{{$t->name}}</option>
                            @endforeach
                        </select>
                        
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Guru</label>
                    <div class="col-10">
                        
                        <select class="custom-select col-12" name="nl_gr_id" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            @foreach ($guru as $t)
                            <option value="{{$t->id}}">{{$t->name}}</option>
                            @endforeach
                        </select>
                        
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Kelas</label>
                    <div class="col-10">
                        
                        <select class="custom-select col-12" name="nl_kls_id" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            @foreach ($kelas as $t)
                            <option value="{{$t->kls_id}}">{{$t->kls_kelas}}</option>
                            @endforeach
                        </select>
                        
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Semester</label>
                    <div class="col-10">
                        
                        <select class="custom-select col-12" name="nl_smst" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>

                            <option value="1">Semester 1</option>
                            <option value="2">Semester 2</option>
                            
                        </select>
                        
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">Nilai</label>
                    <div class="col-10">
                        <input class="form-control" type="number" placeholder="Keterangan" name="nl_nilai"
                            id="example-email-input">
                    </div>
                </div>
                
                <button type="submit" class="btn waves-effect waves-light btn-success">Save</button>
                <a href="/nilai" class="btn waves-effect waves-light btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>


@endsection
