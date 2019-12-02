@extends('layouts.app')

@section('content')
<head>      
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
</head>
<body>
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
                        <select class="cari form-control" style="width:500px;" name="cari"></select>
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
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
    $('.cari').select2({
        placeholder: 'Search',
        ajax: {
        url: '/siswa/search',
        dataType: 'json',
        delay: 250,
        processResults: function (data) {
            return {
            results:  $.map(data, function (item) {
                return {
                text: item.nama,
                id: item.id
                }
            })
            };
        },
        cache: true
        }
    });

    </script>
</body>
@endsection