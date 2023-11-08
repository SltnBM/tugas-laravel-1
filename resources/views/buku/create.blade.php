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
            <h3 class="card-title" style="color: white;">Tambah Data Buku</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
                <form action="{{ route('buku.store') }}" method="POST">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputKodeBuku1">Kode Buku</label>
                    <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" id="exampleInputKodeBuku1"
                        placeholder="Enter Kode Buku">
                </div>
                @error('kode')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="exampleInputJudulBuku1">Judul Buku</label>
                    <input type="text" class="form-control  @error('judul') is-invalid @enderror" name="judul" id="exampleInputJudulBuku1"
                        placeholder="Enter Judul Buku">
                </div>
                @error('judul')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="exampleInputPenulisBuku1">Penulis Buku</label>
                    <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" id="exampleInputPenulisBuku1"
                        placeholder="Enter Penulis Buku">
                </div>
                @error('penulis')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="exampleInputPenerbitBuku1">Penerbit Buku</label>
                    <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" id="exampleInputPenerbitBuku1"
                        placeholder="Enter Penerbit Buku">
                </div>
                @error('penerbit')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="tahun">Tahun Penerbit</label>
                    <input type="number" name="tahun" id="tahun" class="form-control @error('tahun') is-invalid @enderror" min="2000"
                        max="2099" step="1" placeholder="Tahun (2000-2099)">
                </div>
                @error('tahun')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="exampleInputStok1">Stok</label>
                <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" id="exampleInputStok1"
                    placeholder="Enter Stok">
                @error('stok')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <!-- /.card-body -->

                <div class="card-footer" style="background-color: white;">
                <a href="{{ route('buku.index') }}" class="btn btn-sm btn-success">
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