@extends('template.temp')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Data Siswa</h4>
            <form class="form" action="{{route('jadwal.update', $jadwal->jad_id)}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Kelas</label>
                    <div class="col-10">
                        
                        <select class="custom-select col-12" name="jad_kls_id" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            @foreach ($kelas as $t)
                            <option value="{{$t->kls_id}}"<?php if($t->kls_id == $jadwal->jad_kls_id) {echo "selected";} ?>>{{$t->kls_kelas}}</option>
                            @endforeach
                        </select>
                        
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Hari</label>
                    <div class="col-10">
                        <select class="custom-select col-12" name="jad_hari" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            <option value="Senin"<?php if($jadwal->jad_hari == "Senin") {echo "selected";} ?>>Senin</option>
                            <option value="Selasa"<?php if($jadwal->jad_hari == "Selasa") {echo "selected";} ?>>Selasa</option>
                            <option value="Rabu"<?php if($jadwal->jad_hari == "Rabu") {echo "selected";} ?>>Rabu</option>
                            <option value="Kamis"<?php if($jadwal->jad_hari == "Kamis") {echo "selected";} ?>>Kamis</option>
                            <option value="Jum'at"<?php if($jadwal->jad_hari == "Jum'at") {echo "selected";} ?>>Jum'at</option>
                            <option value="Sabtu"<?php if($jadwal->jad_hari == "Sabtu") {echo "selected";} ?>>Sabtu</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Guru</label>
                    <div class="col-10">
                        
                        <select class="custom-select col-12" name="jad_gr_id" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            @foreach ($guru as $t)
                            <option value="{{$t->id}}"<?php if($t->id == $jadwal->jad_gr_id) {echo "selected";} ?>>{{$t->name}}</option>
                            @endforeach
                        </select>
                        
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Jam Pelajaran</label>
                    <div class="col-10">
                        <select class="custom-select col-12" name="jad_jam_pelajaran" id="inlineFormCustomSelect">
                            <option selected="" value="">Silahkan Pilih</option>
                            <option value="07:00"<?php if($jadwal->jad_jam_pelajaran == "07:00") {echo "selected";} ?>>07:00</option>
                            <option value="09:00"<?php if($jadwal->jad_jam_pelajaran == "09:00") {echo "selected";} ?>>09:00</option>
                            <option value="11:00"<?php if($jadwal->jad_jam_pelajaran == "11:00") {echo "selected";} ?>>11:00</option>
                            <option value="02:00"<?php if($jadwal->jad_jam_pelajaran == "02:00") {echo "selected";} ?>>02:00</option>
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