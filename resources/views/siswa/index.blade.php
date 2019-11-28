@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <h2>Data Siswa</h2>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    Belajar Laravel
                </div>
                
                <div class="card-body">
                    <a class="btn btn-primary float-right" href="/siswa/create" role="button">Tambah</a>
                    {{ $siswa->links() }} 
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $s)
                                <tr>
                                    <td scope="row">{{ $s->id }}</td>
                                    <td>{{ $s->nama }}</td>
                                    <td>{{ $s->kelas }}</td>
                                    <td>{{ $s->keterangan }}</td>
                                    <td>
                                        <a href="/siswa/{{$s->id}}/edit" class="btn btn-warning">Edit
                                        <a href="/siswa/{{$s->id}}/remove" class="btn btn-danger">Hapus
                                    </td>
                                </tr>
                            @endforeach
                            <br/>
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection