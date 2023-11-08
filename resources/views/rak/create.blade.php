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
            <h3 class="card-title" style="color: white;">Tambah Data Rak</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
                <form action="{{ route('rak.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputNamaRak1">Nama Rak</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Enter Nama Rak">
                    </div>
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleInputLokasi1">Lokasi</label>
                        <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" placeholder="Enter Lokasi">
                    </div>
                    @error('lokasi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="buku">Buku</label>
                        <select name="buku" id="buku" class="form-control @error('buku') is-invalid @enderror">
                            <option disabled selected>--Pilih Salah Satu--</option>
                            @forelse ($bukus as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->judul_buku }}</option>
                            @empty
                                <option disabled>--Data Masih Kosong--</option>
                            @endforelse
                        </select>
                    </div>
                    @error('buku')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- /.card-body -->

                <div class="card-footer" style="background-color: white;">
                <a href="{{ route('rak.index') }}" class="btn btn-sm btn-success">
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