@extends('template.master')

@section('content')

    {{-- <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Data Buku</h1>
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
                <h3 class="card-title" style="color: white;">Detail Data Buku</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputKodeBuku1">Kode Buku</label>
                        <input type="text" class="form-control" name="kode" id="exampleInputKodeBuku1" value="{{ $bukus->kode_buku }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputJudulBuku1">Judul Buku</label>
                        <input type="text" class="form-control" name="judul" id="exampleInputJudulBuku1" value="{{ $bukus->judul_buku }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPenulisBuku1">Penulis Buku</label>
                        <input type="text" class="form-control" name="penulis" id="exampleInputPenulisBuku1" value="{{ $bukus->penulis_buku }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPenerbitBuku1">Penerbit Buku</label>
                        <input type="text" class="form-control" name="penerbit" id="exampleInputPenerbitBuku1" value="{{ $bukus->penerbit_buku }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun Penerbit</label>
                        <input type="number" name="tahun" id="tahun" class="form-control" min="2000" max="2099" step="1" value="{{ $bukus->tahun_penerbit }}" disabled>
                    </div>
                    <div> 
                        <label for="exampleInputStok1">Stok</label>
                        <input type="number" class="form-control" name="stok" id="exampleInputStok1" value="{{ $bukus->stok }}" disabled>
                    </div>
                </div>
                <!-- /.card-body -->
    
                <div class="card-footer" style="background-color: white;">
                    <a href="{{ route('buku.index') }}" class="btn btn-sm btn-success">
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