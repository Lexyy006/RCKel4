@extends('layouts/app')
@section('content')
<form action="{{route('feedback.store')}}" method="post" enctype="multipart/form-data">
    @csrf 
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6>Formulir Tambah Feedback</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Kode Siswa</label>
                    <input type="number" class="form-control" name="kodesiswa">
                </div>
            
                <div class="form-group">
                    <label>Kode Konselor</label>
                    <input type="number" class="form-control" name="kodekonselor">
                </div>
            
            
                <div class="form-group">
                    <label>Id Pesan</label>
                    <input type="number" class="form-control" name="idpesan">
                </div>

                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="number" class="form-control" name="idpesan">
                </div>

                <div class="form-group">
                    <label>Isi</label>
                    <textarea class="form-control" name="isi"></textarea>
                </div>
            
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </div>
    </div>
</form>

@endsection