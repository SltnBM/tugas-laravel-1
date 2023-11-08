@extends('template.master')

@section('content')

    {{-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Anggota</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section> --}}
    
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card" style="margin-top: 30px;">
                <div class="card-header" style="background-color: blue;">
                  <h3 class="card-title" style="color: white;">Detail Data Petugas</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                  <div class="card-body">
                    <div class="form-group">
                      <label for="nama_petugas">Nama Petugas</label>
                      <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" value="{{ $petugas[0]->nama_petugas }}" disabled>
                    </div>
                    <div class="form-group">
                      <label for="jabatan_petugas">Jabatan Petugas</label>
                      <input type="text" name="jabatan_petugas" id="jabatan_petugas" class="form-control" value="{{ $petugas[0]->jabatan_petugas }}" disabled>
                    </div>
                    <div class="form-group">
                      <label for="no_telp_petugas">No Telepon Petugas</label>
                      <input type="text" name="no_telp_petugas" id="no_telp_petugas" class="form-control" value="{{ $petugas[0]->no_telp_petugas }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="alamat_petugas">Alamat Petugas</label>
                        <input type="text" name="alamat_petugas" id="alamat_petugas" class="form-control" value="{{ $petugas[0]->alamat_petugas }}" disabled>
                    </div>
                  </div>
                  <!-- /.card-body -->
    
                  <div class="card-footer" style="background-color: white;">
                    <a href="{{ route('petugas.index') }}" class="btn btn-sm btn-success">
                      Kembali
                   </a>
                  </div>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection