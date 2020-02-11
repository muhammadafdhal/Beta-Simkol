@extends('template.temp')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Materi</h4>
            
            <form class="form" action="{{route('jadwal.store')}}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Kelas</label>
                    <div class="col-10">
                        
                        <select class="custom-select col-12" name="jad_kls_id" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            @foreach ($kelas as $t)
                            <option value="{{$t->kls_id}}">{{$t->kls_kelas}}</option>
                            @endforeach
                        </select>
                        
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Hari</label>
                    <div class="col-10">
                        <select class="custom-select col-12" name="jad_hari" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jum'at">Jum'at</option>
                            <option value="Sabtu">Sabtu</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Guru</label>
                    <div class="col-10">
                        
                        <select class="custom-select col-12" name="jad_gr_id" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            @foreach ($guru as $t)
                            <option value="{{$t->id}}">{{$t->name}}</option>
                            @endforeach
                        </select>
                        
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Jam Pelajaran</label>
                    <div class="col-10">
                        <select class="custom-select col-12" name="jad_jam_pelajaran" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            <option value="07:00">07:00</option>
                            <option value="09:00">09:00</option>
                            <option value="11:00">11:00</option>
                            <option value="02:00">02:00</option>
                        </select>
                    </div>
                </div>
                
                <button type="submit" class="btn waves-effect waves-light btn-success">Save</button>
                <a href="/jadwal" class="btn waves-effect waves-light btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>


@endsection
