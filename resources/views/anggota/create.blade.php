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
              <h3 class="card-title" style="color: white;">Tambah Data Anggota</h3>
            </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form action="{{ route('anggota.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="kode_anggota">Kode Anggota</label>
                    <input type="text" name="kode_anggota" id="kode_anggota" class="form-control @error('kode_anggota') is-invalid @enderror" placeholder="Input Kode Anggota">
                    @error('kode_anggota')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="nama_anggota">Nama Anggota</label>
                    <input type="text" name="nama_anggota" id="nama_anggota" class="form-control @error('nama_anggota') is-invalid @enderror" placeholder="Input Nama Anggota">
                    @error('nama_anggota')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="jk_anggota">Jenis Kelamin</label>
                        <select type="text" name="jk_anggota" id="jk_anggota" class="form-control @error('jk_anggota') is-invalid @enderror">
                          <option disabled selected> - Pilih Jenis Kelamin -</option>
                          <option value="L">Laki-Laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                    @error('jk_anggota')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="jurusan_anggota">Jurusan Anggota</label>
                    <input type="text" name="jurusan_anggota" id="jurusan_anggota" class="form-control @error('jurusan_anggota') is-invalid @enderror" placeholder="Input Jurusan Anggota">
                    @error('jurusan_anggota')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="no_telp_anggota">No Telepon</label>
                    <input type="number" name="no_telp_anggota" id="no_telp_anggota" class="form-control @error('no_telp_anggota') is-invalid @enderror" placeholder="Input No Telp Anggota">
                    @error('no_telp_anggota')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="alamat_anggota">Alamat Anggota</label>
                    <input type="text" name="alamat_anggota" id="alamat_anggota" class="form-control @error('alamat_anggota') is-invalid @enderror" placeholder="Input Alamat Anggota">
                    @error('alamat_anggota')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                <!-- /.card-body -->

                <div class="card-footer" style="background-color: white;">
                  <a href="{{ route('anggota.index') }}" class="btn btn-sm btn-success">
                    Kembali
                 </a>
                  <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                  <button type="reset" class="btn btn-sm alert-danger">reset</button>
                </div>
            </form>
              </div>
            </section>

            {{-- <div class="modal" tabindex="-1" id="modalTambah" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Peringatan</h5>
                  </div>
                  <div class="modal-body">
                    <p>Apakah Anda Yakin Akan Keluar Dari Form Create Data Petugas</p>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <a href="{{ route('petugas.index') }}" class="btn btn-primary">Yes</a>
                  </div>
                </div>
              </div>
            </div> --}}

@endsection