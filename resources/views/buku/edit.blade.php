@extends('template.master')

@section('content')
    {{-- <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
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
                <h3 class="card-title" style="color: white;">Edit Data Buku</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start --> 
              <form action="{{ route('buku.update', $bukus->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputKodeBuku1">Kode Buku</label>
                        <input type="text" class="form-control @error('kode') is-invalid @enderror"
                            name="kode" name="kode" id="exampleInputKodeBuku1" value="{{ $bukus->kode_buku }}"></div>
                    @error('kode')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleInputJudulBuku1">Judul Buku</label>
                        <input type="text" class="form-control  @error('judul') is-invalid @enderror" name="judul" id="exampleInputJudulBuku1" value="{{ $bukus->judul_buku }}">
                    </div>
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleInputPenulisBuku1">Penulis Buku</label>
                        <input type="text" class="form-control  @error('penulis') is-invalid @enderror" name="penulis" id="exampleInputPenulisBuku1" value="{{ $bukus->penulis_buku }}">
                    </div>
                    @error('penulis')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleInputPenerbitBuku1">Penerbit Buku</label>
                        <input type="text" class="form-control  @error('penerbit') is-invalid @enderror" name="penerbit" id="exampleInputPenerbitBuku1" value="{{ $bukus->penerbit_buku }}">
                    </div>
                    @error('penerbit')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="tahun">Tahun Penerbit</label>
                        <input type="number" name="tahun" id="tahun" class="form-control @error('tahun') is-invalid @enderror" min="2000" max="2099" step="1" value="{{ $bukus->tahun_penerbit }}">
                    </div>
                    @error('tahun')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="exampleInputStok1">Stok</label>
                    <input type="number" class="form-control  @error('stok') is-invalid @enderror" name="stok" id="exampleInputStok1" value="{{ $bukus->stok }}">
                    @error('stok')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div> 
                <!-- /.card-body -->
                  <div class="card-footer" style="background-color: white;">
                    <a href="{{ route('buku.index') }}" class="btn btn-sm btn-success">
                      Kembali
                   </a>
                    <button type="submit" class="btn btn-sm btn-warning">Update</button>
                    <button type="reset" class="btn btn-sm alert-danger">reset</button>
                  </div>
              </form>
            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection