@extends('layouts.guru.main')

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
    <div class="callout callout-info">
        <div class="table-responsive">
              <table class="table table-bordered" id="table">
                  <thead align="center">
                      <tr>
                          <th>No</th>
                          <th>NIS</th>
                          <th>Nama</th>
                          <th>Detail</th>
                      </tr>
                  </thead>
                  <tbody align="center">
                      @foreach( $laporans as $laporan )
                      <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $laporan->nis }}</td>
                          <td style="text-align:left">{{ $laporan->nama }}</td>
                          <td>
                              @if( request()->routeIs('guru.laporansiswa') )
                                <button class="btn btn-info" onclick="document.location.href='{{ route('guru.laporansiswa.detail', $laporan->nis) }}';">Detail</button>
                                @elseif(request()->routeIs('guru.laporansiswa.rayon'))
                              <button class="btn btn-info" onclick="document.location.href='{{ route('guru.laporansiswa.rayon.detail', $laporan->nis) }}';">Detail</button>
                                @elseif( request()->routeIs('guru.laporansiswa.rayon.kedua') )
                                    <button class="btn btn-info" onclick="document.location.href='{{ route('guru.laporansiswa.rayon.detail.kedua', $laporan->nis) }}';">Detail</button>
                               @else
                               <button class="btn btn-info" onclick="document.location.href='{{ route('guru.laporansiswa.seluruh.detail', $laporan->nis) }}';">Detail</button>
                              @endif
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
              </div>
            </div>
    </section>
    <!-- /.content -->
</div>
@endsection

@section('js')
    <script>
        $(function () {
            $("#table").DataTable();
        });
    </script>
@endsection