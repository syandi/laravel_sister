@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <h2>Data Kelas</h2>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary btn-sm float-right" href="/kelas/create" role="button">Tambah</a>
                </div>
                
                <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        <tbody>
                    @foreach ($kelas as $s)
                        <tr>
                            <td scope="row">{{ $s->id }}</td>
                            <td>{{ $s->nama }}</td>
                            <td>{{ $s->tahun_ajaran }}</td>
                            <td>
                                <a href="/kelas/{{$s->id}}/edit">Edit
                                <a href="/kelas/{{$s->id}}/remove">Hapus
                            </td>
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