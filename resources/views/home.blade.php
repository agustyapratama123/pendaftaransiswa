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
                        <span class="info-box-icon bg-info"><i class="far fa-user"></i></span>

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
                        <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-number">Data Orangtua</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </a>
                <!-- /.info-box -->
            </div>
            {{-- end data orangtua --}}

            {{-- Nilai UNBK --}}
            <div class="col-md-3 col-sm-6 col-12">
                <a href="/nilaiunbk">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-number">Nilai UNBK</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </a>
                <!-- /.info-box -->
            </div>
            {{-- End UNBK --}}

            {{-- Asal Sekolah --}}
            <div class="col-md-3 col-sm-6 col-12">
                <a href="/datasekolah">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-number">Asal Sekolah</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </a>
                <!-- /.info-box -->
            </div>
            {{-- End asal Sekolah --}}

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

<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Condensed Full Width Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th style="width: 5px">#</th>
                        <th>Task</th>
                        <th style="width: 20px">Label</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Update software</td>
                        <td><span class="badge bg-danger">55%</span></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Clean database</td>
                        <td><span class="badge bg-warning">70%</span></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Cron job running</td>
                        <td><span class="badge bg-primary">30%</span></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Fix and squish bugs</td>
                        <td><span class="badge bg-success">90%</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection
<div></div>
