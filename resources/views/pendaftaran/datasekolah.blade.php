@extends('layouts.pendaftaran')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Sekolah Asal (3/5)</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Masukan Email dan Password</p>

            <form action="/login" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input placeholder="NPSN Sekolah" id="npsn" type="npsn" class="form-control @error('npsn') is-invalid @enderror" name="npsn" value="{{ old('npsn') }}" required autocomplete="npsn" autofocus>

                    @error('npsn')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input placeholder="Nama Sekolah Asal" id="namasekolah" type="namasekolah" class="form-control @error('namasekolah') is-invalid @enderror" name="namasekolah" value="{{ old('namasekolah') }}" required autocomplete="namasekolah" autofocus>

                    @error('namasekolah')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input placeholder="Alamat Sekolah" id="alamat" type="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                    @error('alamat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input placeholder="Tahun Lulus" id="tahunlulus" type="tahunlulus" class="form-control @error('tahunlulus') is-invalid @enderror" name="tahunlulus" value="{{ old('tahunlulus') }}" required autocomplete="tahunlulus" autofocus>

                    @error('tahunlulus')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- /.col -->
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary btn-block">Selanjutnya</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
@endsection
