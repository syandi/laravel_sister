@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
<<<<<<< HEAD
                    <a class="btn btn-primary" href="/machines/new" role="button">Tambah</a>
                </div>
=======
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
>>>>>>> e76cac6691f71f28f200d8efd5596fb1788b664b
                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
<<<<<<< HEAD
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($student as $s)
=======
                            <th scope="col">No</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        <tbody>
                    @foreach ($siswa as $s)
>>>>>>> e76cac6691f71f28f200d8efd5596fb1788b664b
                        <tr>
                            <th scope="row">{{ $s->id }}</th>
                            <td>{{ $s->nik }}</td>
                            <td>{{ $s->nama }}</td>
                            <td>{{ $s->keterangan }}</td>
<<<<<<< HEAD
                            
                        </tr>
                    @endforeach
                    </tbody>
                </table>
=======
                        </tr>
                    @endforeach
                    </tbody>
                    </thead>
>>>>>>> e76cac6691f71f28f200d8efd5596fb1788b664b
                </div>
            </div>
        </div>
    </div>
</div>
@endsection