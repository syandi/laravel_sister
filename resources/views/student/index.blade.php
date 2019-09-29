@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form><!--- Form -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input name = "nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="nama">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Kode</label>
                                    <input name = "kode" type="text" class="form-control" id="Kode" placeholder="kode">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                                    <textarea name = "deskripsi" class="form-control" id="exampleFormControlTextarea1" ros="3"></textarea>
                                </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                <div class="card-body">
                <table class="table">
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
                        </tr>
                    @endforeach
                    </tbody>
                    </thead>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection