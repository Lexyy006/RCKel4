@extends('layouts/app')
@section('content')
<form action="{{route('konselor.store')}}" method="post" enctype="multipart/form-data">
    @csrf 
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6>Formulir Tambah Konselor</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Kode konselor</label>
                    <input type="number" class="form-control" name="kodekonselor">
                </div>
            
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
            
            
                <div class="form-group">
                    <label>Password</label>
                    <input type="number" class="form-control" name="password">
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
            
               
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="custom-select">
                        <option value="" selected disabled hidden>--Pilih Jenis Kelamin--</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
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