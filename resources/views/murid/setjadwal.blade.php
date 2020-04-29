@extends('layouts.murid.main')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Set Jadwal</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/murid">Home</a></li>
                        <li class="breadcrumb-item active">Set Jadwal</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Jadwal </h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="post" class="form-data" id="form-data" action="{{route('jadwal.store')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Id Jadwal</label>
                                    <input type="text" name="id_jadwal" id="id_jadwal" class="form-control"
                                        required="true">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Jam Mulai</label>
                                    <input type="time" name="jam_mulai" id="jam_mulai" class="form-control"
                                        required="true">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Jam Akhir</label>
                                    <input type="time" name="jam_akhir" id="jam_akhir" class="form-control"
                                        required="true">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Mata pelajaran</label>
                                    <select name="id_mapel" id="id_mapel" class="form-control" required="true">
                                        <option value=""></option>
                                        <option value="1">Sistem Informasi</option>
                                        <option value="2">Teknik Informatika</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Aktifitas</label>
                                    <select name="id_aktifitas" id="id_aktifitas" class="form-control" required="true">
                                        <option value=""></option>
                                        <option value="1">Sistem Informasi</option>
                                        <option value="2">Teknik Informatika</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="simpan" id="simpan" class="btn btn-primary">
                                <i class="fa fa-save"></i> Simpan
                            </button>
                        </div>
                    </form>
                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Jadwal</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="row">
                                    <div class="col-sm-12 table-responsive">
                                        <table class="table table hover">
                                            <thead>
                                                <tr>
                                                    <th>Nomor</th>
                                                    <th>Id Jadwal</th>
                                                    <th>Jam Mulai</th>
                                                    <th>Jam Akhir</th>
                                                    <th>Id Aktifitas</th>
                                                    <th>Id Mapel</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($detailjadwal as $data)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$data->id_jadwal}}</td>
                                                    <td>{{$data->jam_mulai}}</td>
                                                    <td>{{$data->jam_akhir}}</td>
                                                    <td>{{$data->id_aktifitas}}</td>
                                                    <td>{{$data->id_mapel}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.card-body -->

        </div>
</div>
</section>
<!-- /.content -->
</div>

@endsection