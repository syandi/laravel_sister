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
                    <a class="btn btn-primary btn-sm float-right" href="/siswa/create" role="button">Tambah</a>
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