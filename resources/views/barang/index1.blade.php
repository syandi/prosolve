@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <a class="btn btn-primary" href="/produks/new" role="button">Tambah</a>
                </div>
                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Code</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        <tbody>
                        @foreach ($produk as $produks)
                        <tr>
                            <th scope="row">{{ $barang->id }}</th>
                            <td>{{ $produks->nama }}</td>
                            <td>{{ $produks->code }}</td>
                            <td>{{ $produks->deskripsi }}</td>
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
