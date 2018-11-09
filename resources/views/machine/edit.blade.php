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
                <form method="POST" action="/machines/{{$id}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">Nama</label>

                            <div class="col-md-6">
                                <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $machine->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-sm-4 col-form-label text-md-right">Lokasi</label>

                            <div class="col-md-6">
                                <input id="location" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" value="{{ $machine->location }}" required autofocus>

                                @if ($errors->has('location'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="type" class="col-sm-4 col-form-label text-md-right">Jenis</label>

                            <div class="col-md-6">
                                <select name="type" id="type" class="form-control input-lg dynamic">
                                    <option value="motor" {{ $machine->type == 'motor' ? 'selected="selected"' : '' }}>Motor</option>
                                    <option value="valve_manual" {{ $machine->type == 'valve_manual' ? 'selected="selected"' : '' }}>Valve Manual</option>
                                    <option value="valve_otomatis" {{ $machine->type == 'valve_otomatis' ? 'selected="selected"' : '' }}>Valve Otomatis</option>
                                    <option value="sensor" {{ $machine->type == 'sensor' ? 'selected="selected"' : '' }}>Sensor</option>
                                </select>
                            </div>
                        </div>
                       

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>

                                <a class="btn btn-link" href="/machines">
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
@endsection