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
                <h3 class="card-title" style="color: white;">Detail Data Rak</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                    <div class="form-group">
                        <label for="NamaRak1">Nama Rak</label>
                        <input type="text" class="form-control" value="{{ $rak->nama_rak }}" name="nama" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Lokasi1">Lokasi</label>
                        <input type="text" class="form-control" value="{{ $rak->lokasi_rak }}" name="lokasi" disabled>
                    </div>
                    <div class="form-group">
                        <label for="JudulBuku">Alamat</label>
                        <input type="text" class="form-control" name="buku" value="{{ $rak->buku->judul_buku }}" disabled>
                    </div>
                </div>
                <!-- /.card-body -->
    
                <div class="card-footer" style="background-color: white;">
                    <a href="{{ route('rak.index') }}" class="btn btn-sm btn-success">
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