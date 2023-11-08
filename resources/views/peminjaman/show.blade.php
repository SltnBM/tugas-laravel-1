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
                <h3 class="card-title" style="color: white;">Detail Data Peminjaman</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                    <div class="form-group">
                        <label for="TanggalPinjam">Tanggal Pinjam</label>
                        <input type="date" class="form-control"
                            name="pinjam" value="{{ $peminjaman->tanggal_pinjam }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="TanggalKembali">Tanggal Kembali</label>
                        <input type="date" class="form-control"
                            name="kembali" value="{{ $peminjaman->tanggal_kembali }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Buku">Buku</label>
                        <input type="text" class="form-control"
                            name="buku" value="{{ $bukus->judul_buku }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Angoota">Anggota</label>
                        <input type="text" class="form-control"
                            name="angoota" value="{{ $anggotas->nama_anggota }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Petugas">Petugas</label>
                        <input type="text" class="form-control"
                            name="petugas" value="{{ $petugass->nama_petugas }}" disabled>
                    </div>
                </div>
                <!-- /.card-body -->
    
                <div class="card-footer" style="background-color: white;">
                    <a href="{{ route('peminjaman.index') }}" class="btn btn-sm btn-success">
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