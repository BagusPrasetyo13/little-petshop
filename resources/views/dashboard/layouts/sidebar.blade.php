<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard/index" class="brand-link">
      <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Little Petshop</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/dashboard/index" class="nav-link {{ Request::is('dashboard')?'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/produk" class="nav-link {{ Request::is('dashboard/produk')?'active' : '' }}">
                <i class="nav-icon fas fa-archive"></i>
              <p>
                Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/pesanan" class="nav-link {{ Request::is('dashboard/pesanan*')?'active' : '' }}">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Pesanan
              </p>
              <span class="badge rounded-pill bg-warning">{{ $countpesanan }}</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/kategori" class="nav-link {{ Request::is('dashboard/kategori')?'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
          <br>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/home" class="nav-link {{ Request::is('dashboard')?'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
            <p>
              Home
            </p>
          </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
