@extends('layouts/app')
@section('content')
@if($errors->any())
@foreach($errors->all() as $err)
<p class="alert alert-danger">{{$err}}</p>
@endforeach
@endif
<form action="{{url('siswa/'.$data->kodesiswa)}}" method="post" enctype="multipart/form-data">
    @csrf 
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6>Formulir Edit Siswa</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Kode Siswa</label>
                    <input type="number" class="form-control" name="kodesiswa" value="{{$data->kodesiswa}}">
                </div>
            
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{$data->email}}">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="number" class="form-control" name="password" value="{{$data->password}}">
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{$data->nama}}">
                </div>
               
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="custom-select">
                        <option value="" selected disabled hidden>--Pilih Jenis Kelamin--</option>
                        <option value="Pria" {{$data->jenis_kelamin == 'Pria' ? 'selected': ''}}>Pria</option>
                        <option value="Wanita" {{$data->jenis_kelamin == 'Wanita' ? 'selected': ''}}>Wanita</option>
                    </select>
                </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </div>
    </div>
</form>

@endsection