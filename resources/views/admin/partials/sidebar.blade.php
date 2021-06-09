<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ route('admin.dashboard') }}">DERING</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html">St</a>
  </div>
  <ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="{{ Request::route()->getName() == 'admin.dashboard' ? ' active' : '' }}">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="fa fa-columns"></i> <span>Dashboard</span>
      </a>
    </li>
    @if(Auth::user()->can('manage-users'))
    <li class="menu-header">Kependudukan</li>
    <li class="{{request()->is('admin/penduduk*') ? 'active' : ''}}">
      <a href="{{url('admin/penduduk')}}" class="nav-link">
        <i class="fa fa-user"></i> <span>Penduduk</span>
      </a>
    </li>
    <li class="{{request()->is('admin/users*') ? 'active' : ''}}">
      <a class="nav-link" href="{{ url('admin/users') }}">
        <i class="fa fa-users"></i> <span>Akun</span>
      </a>
    </li>
    @endif

    <li class="menu-header">Aparatur Desa</li>
    <li>
      <a href="#" class="nav-link">
        <i class="fa fa-user"></i> <span>Aparat Desa</span>
      </a>
    </li>
    <li>
      <a href="#" class="nav-link">
        <i class="fa fa-chalkboard-teacher"></i> <span>Karang Taruna</span>
      </a>
    </li>

    <li class="menu-header">Inventaris</li>
    <li>
      <a href="#" class="nav-link">
        <i class="fa fa-shapes"></i> <span>Inventaris Desa</span>
      </a>
    </li>
    <li>
      <a href="#" class="nav-link">
        <i class="fa fa-chalkboard-teacher"></i> <span>KAS</span>
      </a>
    </li>
    <li>
      <a href="#" class="nav-link">
        <i class="fa fa-chalkboard-teacher"></i> <span>RAB</span>
      </a>
    </li>


    <li class="menu-header">Layanan</li>
    <li>
      <a href="#" class="nav-link">
        <i class="fa fa-user"></i> <span>Berita</span>
      </a>
    </li>
    <li>
      <a href="#" class="nav-link">
        <i class="fa fa-chalkboard-teacher"></i> <span>Agenda</span>
      </a>
    </li>
    <li>
      <a href="#" class="nav-link">
        <i class="fa fa-chalkboard-teacher"></i> <span>Aspirasi</span>
      </a>
    </li>

    <li class="menu-header">Manajemen Surat</li>
    <li>
      <a href="#" class="nav-link">
        <i class="fa fa-user"></i> <span>File Surat</span>
      </a>
    </li>
    <li>
      <a href="#" class="nav-link">
        <i class="fa fa-chalkboard-teacher"></i> <span>Surat Masuk</span>
      </a>
    </li>
    <li>
      <a href="#" class="nav-link">
        <i class="fa fa-chalkboard-teacher"></i> <span>Surat Keluar</span>
      </a>
    </li>

    <li class="menu-header">Ekonomi</li>
    <li>
      <a href="#" class="nav-link">
        <i class="fa fa-user"></i> <span>Produk</span>
      </a>
    </li>
    <li>
      <a href="#" class="nav-link">
        <i class="fa fa-chalkboard-teacher"></i> <span>Keahlian</span>
      </a>
    </li>

    <li class="menu-header">Tentang Desa</li>
    <li>
      <a href="#" class="nav-link">
        <i class="fa fa-user"></i> <span>Profil</span>
      </a>
    </li>
    <li>
      <a href="#" class="nav-link">
        <i class="fa fa-chalkboard-teacher"></i> <span>Visi Misi</span>
      </a>
    </li>
    <li>
      <a href="#" class="nav-link">
        <i class="fa fa-chalkboard-teacher"></i> <span>Peraturan</span>
      </a>
    </li>
  </ul>
</aside>