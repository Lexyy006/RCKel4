@extends('layouts/app')
@section('content')
@if($errors->any())
@foreach($errors->all() as $err)
<p class="alert alert-danger">{{$err}}</p>
@endforeach
@endif
<form action="{{url('konseling/'.$data->nip)}}" method="post" enctype="multipart/form-data">
    @csrf 
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6>Formulir Edit Konseling</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Kode Konseling</label>
                    <input type="number" class="form-control" name="kodekonseling" value="{{$data->kodekonseling}}">
                </div>
            
                <div class="form-group">
                    <label>konselor_id</label>
                    <input type="text" class="form-control" name="konselor_id" value="{{$data->konselor_id}}">
                </div>
            
            
                <div class="form-group">
                    <label>siswa_id</label>
                    <input type="number" class="form-control" name="siswa_id" value="{{$data->siswa_id}}">
                </div>
            
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="custom-select">
                        <option value="" selected disabled hidden>--Pilih status--</option>
                        <option value="Menunggu konselor" {{$data->status == 'Menunggu Konselor' ? 'selected': ''}}>Menunggu Konselor</option>
                        <option value="Diproses" {{$data->status == 'Diproses' ? 'selected': ''}}>Diproses</option>
                        <option value="Selesai" {{$data->status == 'Selesai' ? 'selected': ''}}>Selesai</option>
                        <option value="Dibatalkan" {{$data->status == 'Dibatalkan' ? 'selected': ''}}>Dibatalkan</option>
                        <option value="Ditolak" {{$data->status == 'Ditolak' ? 'selected': ''}}>Ditolak</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Pesan</label>
                    <textarea class="form-control" name="pesan">{{$data->pesan}}</textarea>
                </div>

                <div class="form-group">
                    <label>Tanggal</label>
                    <textarea class="form-control" name="tanggal">{{$data->tanggal}}</textarea>
                </div>
            
                
            
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </div>
    </div>
</form>

@endsection