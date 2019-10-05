@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Tambah
                    </button>

<<<<<<< HEAD
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
                            <form action = "" method="POST"> <!--- Form -->
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
=======
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Data Siswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form method="POST" action="/siswa">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label text-md-left">NIK</label>

                                <div class="col-md-10">
                                    <input id="nik" class="form-control{{ $errors->has('nik') ? ' is-invalid' : '' }}" name="nik" value="{{ old('nik') }}" required autofocus>

                                    @if ($errors->has('nik'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nik') }}</strong>
                                        </span>
                                    @endif
>>>>>>> 6b02f463704303730c87ca194959b5eaa87d967e
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label text-md-left">Nama</label>

                                <div class="col-md-10">
                                    <input id="nama" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" required autofocus>

                                    @if ($errors->has('nama'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nama') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label text-md-left">Keterangan</label>

                                <div class="col-md-6 col-md-right">
                                    <input id="keterangan" class="form-control{{ $errors->has('keterangan') ? ' is-invalid' : '' }}" name="keterangan" value="{{ old('keterangan') }}" required autofocus>

                                    @if ($errors->has('keterangan'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('keterangan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                        </div>
                        </form>
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
                    </thead>
                    <tbody>
                    @foreach ($student as $s)
                        <tr>
                            <th scope="row">{{ $s->id }}</th>
                            <td>{{ $s->nik }}</td>
                            <td>{{ $s->nama }}</td>
                            <td>{{ $s->keterangan }}</td>
                            
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection