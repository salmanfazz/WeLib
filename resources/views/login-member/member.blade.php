@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Daftar Hadir') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="NIS" class="col-md-4 col-form-label text-md-right">{{ __('NIS') }}</label>

                            <div class="col-md-6">
                                <input id="NIS" type="NIS" class="form-control @error('NIS') is-invalid @enderror" name="NIS" value="{{ old('NIS') }}" required autocomplete="NIS" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="Nama" type="Nama" class="form-control @error('Nama') is-invalid @enderror" name="Nama" value="{{ old('Nama') }}" required autocomplete="Nama" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Kelas" class="col-md-4 col-form-label text-md-right">{{ __('Kelas') }}</label>

                            <div class="col-md-6">
                                <input id="Kelas" type="Kelas" class="form-control @error('Kelas') is-invalid @enderror" name="Kelas" value="{{ old('Kelas') }}" required autocomplete="Kelas" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection