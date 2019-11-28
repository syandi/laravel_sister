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
                <form method="POST" action="/kelas/{{$id}}">
                        @csrf

                        <div class="form-group row">
                            <label for="id" class="col-sm-4 col-form-label text-md-right">ID</label>

                            <div class="col-md-6">
                                <input id="id" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{ $kelas->id }}" required autofocus>

                                @if ($errors->has('id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="nama" class="col-sm-4 col-form-label text-md-right">Nama</label>

                            <div class="col-md-6">
                                <input id="nama" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ $kelas->nama }}" required autofocus>

                                @if ($errors->has('nama'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tahun_ajaran" class="col-sm-4 col-form-label text-md-right">Tahun Ajaran</label>

                            <div class="col-md-6">
                                <input id="tahun_ajaran" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="tahun_ajaran" value="{{ $kelas->tahun_ajaran }}" required autofocus>

                                @if ($errors->has('tahun_ajaran'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tahun_ajaran') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>

                                <a class="btn btn-link" href="/kelas">
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