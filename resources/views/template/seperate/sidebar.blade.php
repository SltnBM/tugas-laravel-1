<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ asset('AdminLTE/index3.html')}}" class="brand-link">
    <img src="{{ asset('AdminLTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Perpustakaan Makmur</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="{{ route('user.profile', Auth::user()->id) }}" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <!-- <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Form Input
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li> -->
            <li class="nav-item">
              <a href="{{ asset('anggota')}}" class="nav-link">
                <i class="fas fa-users"></i>
                <p>Anggota</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('petugas')}}" class="nav-link">
                <i class="fas fa-user-tie"></i>
                <p>Petugas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('buku')}}" class="nav-link">
                <i class="fas fa-book-open"></i>
                <p>Buku</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('rak')}}" class="nav-link">
                <i class="fas fa-archive"></i>
                <p>Rak</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('peminjaman')}}" class="nav-link">
                <i class="fas fa-calendar"></i>
                <p>Peminjaman</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('pengembalian')}}" class="nav-link">
                <i class="fas fa-arrow-circle-left"></i>
                <p>Pengembalian</p>
              </a>
            </li>
            <li class="nav-item">
              <form action="{{ route('auth.logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-light btn-md nav-link">
                    Log Out &nbsp;
                    <i class="fas fa-sign-out-alt"></i> <!-- Menggunakan ikon Logout yang benar -->
                  </button>
              </form>
            </li>
          </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>