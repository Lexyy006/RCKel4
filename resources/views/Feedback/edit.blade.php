@extends('layouts/app')
@section('content')
@if($errors->any())
@foreach($errors->all() as $err)
<p class="alert alert-danger">{{$err}}</p>
@endforeach
@endif
<form action="{{url('feedback/'.$data->nip)}}" method="post" enctype="multipart/form-data">
    @csrf 
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6>Formulir Edit Feedback</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Kode Siswa</label>
                    <input type="number" class="form-control" name="kodesiswa" value="{{$data->kodesiswa}}">
                </div>
            
                <div class="form-group">
                    <label>Kode Konselor</label>
                    <input type="text" class="form-control" name="kodekonselor" value="{{$data->kodekonselor}}">
                </div>
            
            
                <div class="form-group">
                    <label>Id Pesan</label>
                    <input type="number" class="form-control" name="idpesan" value="{{$data->idpesan}}">
                </div>

                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="number" class="form-control" name="tanggal" value="{{$data->tanggal}}">
                </div>

                <div class="form-group">
                    <label>Isi</label>
                    <input type="number" class="form-control" name="isi" value="{{$data->isi}}">
                </div>
            
                
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </div>
    </div>
</form>

@endsection