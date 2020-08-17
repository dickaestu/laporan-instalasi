<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <p class="d-md-none">{{ Auth::user()->roles }}</p>
    <div class="sidebar-brand-text mx-3">{{ Auth::user()->roles }}</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  @if (Auth::user()->roles == 'TEKNISI')
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('index') }}">
      <i class="fas fa-fw fa-file-alt"></i>
      <span>Form Pekerjaan</span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-file"></i>
        <span>Hasil Pengerjaan</span></a>
      </li>
      @else
      <li class="nav-item">
      <a class="nav-link" href="{{ route('kelola-teknisi') }}">
        <i class="fas fa-fw fa-users"></i>
        <span>Kelola Akun Teknisi</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-file"></i>
        <span>Laporan Pekerjaan Teknisi</span></a>
      </li>
      @endif
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
      
    </ul>