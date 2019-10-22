@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <h2>Data Siswa</h2>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <!-- Button trigger modal -->
                    <a type="button" class="btn btn-primary btn-sm float-right" href="/siswa/create" role="button">Tambah Data</a>
                </div>
                
                <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        <tbody>
                    @foreach ($siswa as $s)
                        <tr>
                            <th scope="row">{{ $s->id }}</th>
                            <td>{{ $s->nik }}</td>
                            <td>{{ $s->nama }}</td>
                            <td>{{ $s->keterangan }}</td>
                            <td>
                                <a href="#">Edit
                                <a href="#">Hapus
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </thead>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK</label>
                        <input type="text" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nik">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="exampleInputPassword1" placeholder="keterangan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection