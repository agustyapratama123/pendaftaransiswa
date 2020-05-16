@extends('layouts.master')

@section('content')
<section class="content pt-2">
    <h2 class="text-center">Isi Biodata</h2>
    <div class="container-fluid">
        <div class="row">
            {{-- data siswa --}}
            <div class="col-md-3 col-sm-6 col-12">
                <a href="/datasiswa">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fas fa-graduation-cap fa-1x"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-number">Data Siswa</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </a>
                <!-- /.info-box -->
            </div>
            {{-- end data siswa --}}

            {{-- data orang tua --}}
            <div class="col-md-3 col-sm-6 col-12">
                <a href="dataortu">
                    <div class="info-box">
                        <span class="info-box-icon bg-success"><i class="fas fa-users fa-1x"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-number">Data Orangtua</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </a>
                <!-- /.info-box -->
            </div>
            {{-- end data orangtua --}}

            {{-- Asal Sekolah --}}
            <div class="col-md-3 col-sm-6 col-12">
                <a href="/datasekolah">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger"><i class="fas fa-school fa-1x"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-number">Asal Sekolah</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </a>
                <!-- /.info-box -->
            </div>
            {{-- End asal Sekolah --}}

            {{-- Nilai UNBK --}}
            <div class="col-md-3 col-sm-6 col-12">
                <a href="/nilaiunbk">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="far fa-star"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-number">Nilai UNBK</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </a>
                <!-- /.info-box -->
            </div>
            {{-- End UNBK --}}



            {{-- Nilai USBN --}}
            <div class="col-md-3 col-sm-6 col-12">
                <a href="/">
                    <div class="info-box">
                        <span class="info-box-icon bg-lightblue"><i class="far fa-star"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-number">Nilai USBN</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </a>
                <!-- /.info-box -->
            </div>
            {{-- End Nilai USBN --}}
            <!-- /.col -->
        </div>
    </div>
</section>
<hr>
@endsection
<div></div>
