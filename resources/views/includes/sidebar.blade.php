<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
    <p class="d-md-none">{{ Auth::user()->roles }}</p>
    <div class="sidebar-brand-text mx-3">{{ Auth::user()->roles }}</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  @if (Auth::user()->roles == 'TEKNISI')
  <li class="nav-item {{ Request::is('/*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
    </li>
  <li class="nav-item {{ Request::is('form-pekerjaan/create') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('form-pekerjaan.create') }}">
      <i class="fas fa-fw fa-file-alt"></i>
      <span>Form Pekerjaan</span></a>
    </li>
    
    <li class="nav-item {{ Request::is('form-pekerjaan') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('form-pekerjaan.index') }}">
        <i class="fas fa-fw fa-file"></i>
        <span>Hasil Pengerjaan</span></a>
      </li>
      @else
      <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('dashboard-admin') }}">
        <i class="fas fa-fw fa-users"></i>
        <span>Dashboard</span></a>
      </li>

      <li class="nav-item {{ Request::is('admin/kelola-teknisi*') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('kelola-teknisi') }}">
        <i class="fas fa-fw fa-users"></i>
        <span>Kelola Akun Teknisi</span></a>
      </li>
      
      <li class="nav-item {{ Request::is('admin/laporan-pekerjaan-teknisi') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('laporan-pekerjaan-teknisi') }}">
        <i class="fas fa-fw fa-file"></i>
        <span>Laporan Pekerjaan Teknisi</span></a>
      </li>

      <li class="nav-item {{ Request::is('admin/laporan-gaji-teknisi') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('laporan-gaji-teknisi') }}">
        <i class="fas fa-fw fa-file"></i>
        <span>Laporan Gaji Teknisi</span></a>
      </li>

    
      @endif
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
      
    </ul>