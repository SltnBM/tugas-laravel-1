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
                <h3 class="card-title" style="color: white;">Edit Data Rak</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start --> 
              <form action="{{ route('rak.update', $rak->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputNamaRak1">Nama Rak</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                            name="nama" value="{{ $rak->nama_rak }}">
                    </div>
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleInputLokasi1">Lokasi</label>
                        <input type="text" class="form-control @error('lokasi') is-invalid @enderror"
                            name="lokasi" value="{{ $rak->lokasi_rak }}">
                    </div>
                    @error('lokasi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="buku">Buku</label>
                        <select name="buku" id="buku"
                            class="form-control @error('buku') is-invalid @enderror">
                            <option disabled selected>--Pilih Salah Satu--</option>
                            @forelse ($buku as $value)
                                <option value="{{ $value->id }}"
                                    {{ $value->id == $rak->id_buku ? 'selected' : '' }}>
                                    {{ $value->judul_buku }}
                                </option>
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