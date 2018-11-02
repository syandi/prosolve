@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="/machines/new" role="button">Tambah</a>
                </div>
                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($machines as $machine)
                        <tr>
                            <th scope="row">{{ $machine->id }}</th>
                            <td>{{ $machine->name }}</td>
                            <td>{{ $machine->location }}</td>
                            <td>{{ $machine->type }}</td>
                            <td><a href="/machines/{{ $machine->id }}"> Edit</td>
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