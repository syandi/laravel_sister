@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Mesin
                </div>
                <div class="card-body">
                <form method="POST" action="/siswa/{{$id}}">
                        @csrf

                        <div class="form-group row">
                            <label for="nik" class="col-sm-4 col-form-label text-md-right">NIK</label>

                            <div class="col-md-6">
                                <input id="nik" class="form-control{{ $errors->has('nik') ? ' is-invalid' : '' }}" name="nik" value="{{ $siswa->nik }}" required autofocus>

                                @if ($errors->has('nik'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nik') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="nama" class="col-sm-4 col-form-label text-md-right">Nama</label>

                            <div class="col-md-6">
                                <input id="nama" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ $siswa->nama }}" required autofocus>

                                @if ($errors->has('nama'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-4 col-form-label text-md-right">Keterangan</label>

                            <div class="col-md-6">
                                <input id="keterangan" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="keterangan" value="{{ $siswa->keterangan }}" required autofocus>

                                @if ($errors->has('keterangan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('keterangan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>

                                <a class="btn btn-link" href="/siswa">
                                    Kembali
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()