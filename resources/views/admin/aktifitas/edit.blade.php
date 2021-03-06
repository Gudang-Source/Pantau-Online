@extends('layouts.admin.main')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    
                </div><!-- /.col -->
                <div class="col-sm-6">
                    
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
                    <h3 class="card-title">Ubah Data</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="post" class="form-data" id="form-data" action="{{route('admin.aktifitas.update', $aktifitas->id_aktifitas)}}">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Aktifitas</label>
                                    <input type="text" name="nama_aktifitas" id="nama_aktifitas" class="form-control"
                                        required="true" value="{{$aktifitas->nama_aktifitas}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Mata Pelajaraan</label>
                                    <select name="id_mapel" id="mapel" class="form-control" required="true">
                                        @foreach($mapel as $pel)
                                        @if($aktifitas->id_mapel == $pel->id_mapel )
                                        <option value="{{$pel->id_mapel}}" selected>{{$pel->nama_mapel}}</option>
                                        @else
                                        <option value="{{$pel->id_mapel}}">{{$pel->nama_mapel}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="simpan" id="simpan" class="btn btn-primary">
                                <i class="fa fa-save"></i> Update
                            </button>
                        </div>
                    </form>
                    <hr>
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
