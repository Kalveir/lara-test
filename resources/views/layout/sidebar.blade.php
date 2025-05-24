<nav class="pc-sidebar ">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="index.html" class="b-brand">
        <!-- ========   change your logo hear   ============ -->
        <img src="{{ asset('/assets/images/logo.svg') }}" alt="" class="logo logo-lg">
        <img src="{{ asset('/assets/images/logo-sm.svg') }}" alt="" class="logo logo-sm">
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <label>Navigation</label>
        </li>
        <li class="pc-item">
          <a href="{{ route('dashboard') }}" class="pc-link "><span class="pc-micon"><i data-feather="home"></i></span><span class="pc-mtext">Dashboard</span></a>
        </li>
        <li class="pc-item">
          <a href="{{ route('jabatan.index') }}" class="pc-link "><span class="pc-micon"><i data-feather="unlock"></i></span><span class="pc-mtext">Role</span></a>
        </li>
        <li class="pc-item">
          <a href="{{ route('user.index') }}" class="pc-link "><span class="pc-micon"><i data-feather="user"></i></span><span class="pc-mtext">User</span></a>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link "><span class="pc-micon"><i data-feather="box"></i></span><span class="pc-mtext">Components</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="{{ route('example.alert-button') }}">Alert & Button</a></li>
            <li class="pc-item"><a class="pc-link" href="{{ route('example.forms') }}">Form</a></li>
          </ul>
        </li>
        <li class="pc-item">
          <a href="{{ route('example.category') }}" class="pc-link "><span class="pc-micon"><i data-feather="grid"></i></span><span class="pc-mtext">Kategori</span></a>
        </li>
        <li class="pc-item">
          <a href="{{ route('example.product') }}" class="pc-link "><span class="pc-micon"><i data-feather="shopping-cart"></i></span><span class="pc-mtext">Produk</span></a>
        </li>
        @can('kelola palsu')
        <li class="pc-item">
          <a href="{{ route('example.product') }}" class="pc-link "><span class="pc-micon"><i data-feather="shopping-cart"></i></span><span class="pc-mtext">Produk Palsu</span></a>
        </li>
        @endcan
      </ul>
      
    </div>
  </div>
</nav>