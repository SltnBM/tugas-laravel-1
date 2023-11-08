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
                <h3 class="card-title" style="color: white;">Edit Data Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start --> 
              <form action="{{ route('anggota.update', $anggota[0]->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="kode_anggota">Kode Anggota</label>
                    <input type="text" name="kode_anggota" id="kode_anggota" class="form-control @error('kode_anggota') is-invalid @enderror" value="{{$anggota[0]->kode_anggota}}">
                    @error('kode_anggota')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div> 
                  <div class="form-group">
                    <label for="nama">Nama Anggota</label>
                    <input type="text" name="nama_anggota" id="nama_anggota" class="form-control @error('nama_anggota') is-invalid @enderror" value="{{$anggota[0]->nama_anggota}}">
                    @error('nama_anggota')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div> 
                  <div class="form-group">
                        <label for="jk_anggota">Jenis Kelamin</label>
                          <select type ="text" name="jk_anggota" id="jk_anggota" class="form-control @error('jk_anggota') is-invalid @enderror" value="{{ $anggota[0]->jk_anggota }}">
                          <option value="L" @if($anggota[0]->jk_anggota == 'L') selected @endif>Laki-Laki</option>
                          <option value="P" @if($anggota[0]->jk_anggota == 'P') selected @endif>Perempuan</option>
                          </select>
                          @error('jk_anggota')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                  </div>
                  <div class="form-group">
                      <label for="jurusan_anggota">Jurusan</label>
                      <input type="text" name="jurusan_anggota" id="jurusan_anggota" class="form-control @error('jurusan_anggota') is-invalid @enderror" value="{{$anggota[0]->jurusan_anggota}}">
                      @error('jurusan_anggota')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="no_telp_anggota">No Telepon</label>
                    <input type="number" name="no_telp_anggota" id="no_telp_anggota" class="form-control @error('no_telp_anggota') is-invalid @enderror" value="{{$anggota[0]->no_telp_anggota}}">
                    @error('no_telp_anggota')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>  
                  <div class="form-group">
                    <label for="alamat_anggota">Alamat</label>
                    <input type="text" name="alamat_anggota" id="alamat_anggota" class="form-control @error('alamat_anggota') is-invalid @enderror" value="{{$anggota[0]->alamat_anggota}}">
                    @error('alamat_anggota')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div> 
                <!-- /.card-body -->
                  <div class="card-footer" style="background-color: white;">
                    <a href="{{ route('anggota.index') }}" class="btn btn-sm btn-success">
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