@extends('template.master')

@section('content')

   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card" style="margin-top: 30px;">
            <div class="card-header" style="background-color: blue;">
              <h3 class="card-title" style="color: white;">Tambah Data Petugas</h3>
            </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form action="{{ route('petugas.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_petugas">Nama Petugas</label>
                    <input type="text" name="nama_petugas" id="nama_petugas" class="form-control @error('nama_petugas') is-invalid @enderror "placeholder="Input Nama Petugas">
                    @error('nama_petugas')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="jabatan_petugas">Jabatan Petugas</label>
                    <input type="text" name="jabatan_petugas" id="jabatan_petugas" class="form-control @error('jabatan_petugas') is-invalid @enderror " placeholder="Input Jabatan Petugas">
                    @error('jabatan_petugas')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="no_telp_petugas">No Telepon Petugas</label>
                    <input type="number" name="no_telp_petugas" id="no_telp_petugas" class="form-control @error('no_telp_petugas') is-invalid @enderror " placeholder="Input Telepon Petugas">
                    @error('no_telp_petugas')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="alamat_petugas">Alamat Petugas</label>
                    <input type="text" name="alamat_petugas" id="alamat_petugas" class="form-control @error('alamat_petugas') is-invalid @enderror " placeholder="Input Alamat Petugas">
                    @error('alamat_petugas')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                <!-- /.card-body -->

                <div class="card-footer" style="background-color: white;">
                  <a href="{{ route('petugas.index') }}" class="btn btn-sm btn-success">
                    Kembali
                  </a>
                  <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                  <button type="reset" class="btn btn-sm alert-danger">reset</button>
                </div>
            </form>
              </div>
            </section>
@endsection