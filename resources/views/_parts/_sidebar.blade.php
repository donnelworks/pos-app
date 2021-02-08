<aside class="main-sidebar sidebar-light-primary elevation-0">
  <a href="{{ url('dashboard') }}" class="brand-link">
    <img src="{{ asset('assets/dist/img/logo.svg') }}" alt="Logo" class="brand-image">
    <span class="brand-text font-weight-medium text-muted">donnelworks</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="form-inline mt-3">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-3">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
        <!-- DASHBOARD -->
        <li class="nav-item">
          <a href="{{ url('dashboard') }}" class="nav-link">
            <i class="nav-icon bx bx-home-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <!-- PERSEDIAAN -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bx-box"></i>
            <p>Persediaan <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-circle nav-icon"></i>
                <p>Master <i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Kategori</p></a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Merek</p></a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Lokasi</p></a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Barang</p></a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-circle nav-icon"></i>
                <p>Transaksi <i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Stock Opname</p></a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-circle nav-icon"></i>
                <p>Cetak Label <i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Barcode</p></a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Pricetag</p></a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-circle nav-icon"></i>
                <p>Laporan <i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Barang</p></a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Stock</p></a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Stock Opname</p></a>
                </li>
              </ul>
            </li>
          </ul>
        </li>

        <!-- PEMBELIAN -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bx-shopping-bag"></i>
            <p>Pembelian <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-circle nav-icon"></i>
                <p>Master <i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Kategori Supplier</p></a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Data Supplier</p></a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-circle nav-icon"></i>
                <p>Transaksi <i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Purchase Order</p></a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Penerimaan</p></a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Tukar Faktur</p></a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Pembayaran Hutang</p></a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-circle nav-icon"></i>
                <p>Laporan <i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Data Supplier</p></a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Purchase Order</p></a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Penerimaan</p></a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Kartu Hutang</p></a>
                </li>
              </ul>
            </li>
          </ul>
        </li>

        <!-- PENJUALAN -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bx-store-alt"></i>
            <p>Penjualan <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-circle nav-icon"></i>
                <p>Master <i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Kategori Customer</p></a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Data Customer</p></a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-circle nav-icon"></i>
                <p>Transaksi <i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Penjualan</p></a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-circle nav-icon"></i>
                <p>Laporan <i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Data Customer</p></a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Penjualan</p></a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Margin</p></a>
                </li>
              </ul>
            </li>
          </ul>
        </li>

        <!-- KEUANGAN -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bx-dollar-circle"></i>
            <p>Keuangan <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-circle nav-icon"></i>
                <p>Transaksi <i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Kas Masuk</p></a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Kas Keluar</p></a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-circle nav-icon"></i>
                <p>Laporan <i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link"><p>Laba Rugi</p></a>
                </li>
              </ul>
            </li>
          </ul>
        </li>

        <!-- UTILITAS -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bx-wrench"></i>
            <p>Utilitas <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-circle nav-icon"></i>
                <p>Hak Akses</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('user') }}" class="nav-link">
                <i class="bx bx-circle nav-icon"></i>
                <p>Data User</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /Sidebar Menu -->
  </div>
  <!-- /Sidebar -->
</aside>
