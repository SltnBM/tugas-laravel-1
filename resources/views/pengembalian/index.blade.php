@extends('template.master')

@push('css')
<link rel="stylesheet" href="{{ asset('adminLte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('adminLte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('adminLte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    {{-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data buku Perpustakaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section> --}}
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card" style="margin-top: 30px;">
              <div class="card-header" style="background-color: blue;">
                <h3 class="card-title" style="color: white;">Data Pengembalian</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTables" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Denda</th>
                        <th>Buku</th>
                        <th>Anggota</th>
                        <th>Petugas</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                        @foreach ($pengembalians as $key => $value)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->tanggal_pengembalian }}</td>
                            <td>{{ $value->denda }}</td>
                            <td>{{ $value->buku->judul_buku }}</td>
                            <td>{{ $value->anggota->nama_anggota }}</td>
                            <td>{{ $value->petugas->nama_petugas }}</td>
                      <td class="d-flex" style="gap: 10px">
                        <a href="{{ route('pengembalian.show', $value->id) }}" class="btn btn-sm btn-info">
                          Detail
                        </a>
                        <a href="{{ route('pengembalian.edit', $value->id) }}" class="btn btn-sm btn-warning">
                          Edit
                        </a>
                        <form action="{{ route('pengembalian.destroy', $value->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">
                              Delete
                          </button>
                        </form>
                      </td>
                    </tr>
                    @endforeach                  
                  </tbody>
                </table>
                <a href="{{ route('pengembalian.create') }}" class="btn btn-sm btn-success">
                  <i class="fas fa-plus" style="color: #ffffff;"></i>  Create
                </a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    
    <!-- /.content -->
@endsection

@push('script')
  <!-- DataTables  & Plugins -->
<script src="{{ asset('adminLte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('adminLte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
  $(function () {
    $('#dataTables').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush