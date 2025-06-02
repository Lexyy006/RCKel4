@extends('layouts/app')
@section('content')
<form action="{{route('konseling.store')}}" method="post" enctype="multipart/form-data">
    @csrf 
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6>Formulir Tambah Konseling</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Kode Konseling</label>
                    <input type="number" class="form-control" name="kodekonseling">
                </div>
            
                <div class="form-group">
                    <label>Konselor id</label>
                    <input type="text" class="form-control" name="konselor_id">
                </div>
            
            
                <div class="form-group">
                    <label>Siswa Id</label>
                    <input type="number" class="form-control" name="siswa_id">
                </div>
            
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="custom-select">
                        <option value="" selected disabled hidden>--Pilih Status--</option>
                        <option value="Menunggu konselor">Menunggu Konselor</option>
                        <option value="Diproses">Diproses</option>
                        <option value="Selesai">Selesai</option>
                        <option value="Dibatalkan">Dibatalkan</option>
                        <option value="Ditolak">Ditolak</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pesan</label>
                    <textarea class="form-control" name="pesan"></textarea>
                </div>

                <div class="form-group">
                    <label>Tanggal</label>
                    <textarea class="form-control" name="tanggal"></textarea>
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