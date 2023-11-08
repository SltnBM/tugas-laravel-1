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
                <h3 class="card-title" style="color: white;">Edit Data Pengembalian</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start --> 
              <form action="{{ route('pengembalian.update', $pengembalian->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="Tanggal Pengembalian">Tanggal pengembalian</label>
                        <input type="date" class="form-control @error('pengembalian') is-invalid @enderror"
                            name="pengembalian" value="{{ $pengembalian->tanggal_pengembalian }}">
                    </div>
                    @error('pengembalian')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="Denda">Denda</label>
                        <input type="number" class="form-control @error('denda') is-invalid @enderror"
                            name="denda" value="{{ $pengembalian->denda }}">
                    </div>
                    @error('denda')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="buku">Buku</label>
                        <select name="buku" id="buku"
                            class="form-control @error('buku') is-invalid @enderror">
                            <option disabled selected>--Pilih Salah Satu--</option>
                            @forelse ($bukus as $value)
                                <option value="{{ $value->id }}"
                                    {{ $value->id == $pengembalian->id_buku ? 'selected' : '' }}>
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
                    <div class="form-group">
                        <label for="anggota">Anggota</label>
                        <select name="anggota" id="anggota"
                            class="form-control @error('anggota') is-invalid @enderror">
                            <option disabled selected>--Pilih Salah Satu--</option>
                            @forelse ($anggotas as $value)
                                <option value="{{ $value->id }}"
                                    {{ $value->id == $pengembalian->id_anggota ? 'selected' : '' }}>
                                    {{ $value->nama_anggota }}
                                </option>
                            @empty
                                <option disabled>--Data Masih Kosong--</option>
                            @endforelse
                        </select>
                    </div>
                    @error('anggota')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="petugas">Petugas</label>
                        <select name="petugas" id="petugas"
                            class="form-control @error('petugas') is-invalid @enderror">
                            <option disabled selected>--Pilih Salah Satu--</option>
                            @forelse ($petugass as $value)
                                <option value="{{ $value->id }}"
                                    {{ $value->id == $pengembalian->id_petugas ? 'selected' : '' }}>
                                    {{ $value->nama_petugas }}
                                </option>
                            @empty
                                <option disabled>--Data Masih Kosong--</option>
                            @endforelse
                        </select>
                    </div>
                    @error('petugas')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div> 
                <!-- /.card-body -->
                  <div class="card-footer" style="background-color: white;">
                    <a href="{{ route('pengembalian.index') }}" class="btn btn-sm btn-success">
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