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
                <h3 class="card-title" style="color: white;">Edit Data Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form action="{{ route('petugas.update', $petugas[0]->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_petugas">Kode Anggota</label>
                    <input type="text" name="nama_petugas" id="nama_petugas" class="form-control @error('nama_petugas') is-invalid @enderror" value="{{ $petugas[0]->nama_petugas }}">
                    @error('nama_petugas')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="jabatan_petugas">Jabatan Petugas</label>
                    <input type="text" name="jabatan_petugas" id="jabatan_petugas" class="form-control @error('jabatan_petugas') is-invalid @enderror" value="{{ $petugas[0]->jabatan_petugas }}">
                    @error('jabatan_petugas')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="no_telp_petugas">No Telepon Petugas</label>
                    <input type="text" name="no_telp_petugas" id="no_telp_petugas" class="form-control @error('no_telp_petugas') is-invalid @enderror" value="{{ $petugas[0]->no_telp_petugas }}">
                    @error('no_telp_petugas')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="alamat_petugas">Alamat Petugas</label>
                    <input type="text" name="alamat_petugas" id="alamat_petugas" class="form-control @error('alamat_petugas') is-invalid @enderror" value="{{ $petugas[0]->alamat_petugas }}">
                    @error('alamat_petugas')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{ route('petugas.index') }}" class="btn btn-sm btn-success">
                    Kembali
                 </a>
                  <button type="submit" class="btn btn-sm btn-warning">Update</button>
                  <button type="reset" class="btn btn-sm alert-danger">reset</button>
                </div>
            </form>
            </div>
@endsection