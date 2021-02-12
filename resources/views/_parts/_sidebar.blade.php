<aside class="main-sidebar sidebar-dark-primary elevation-0">
  <a href="{{ url('dashboard') }}" class="brand-link text-center">
    <img src="{{ asset('assets/dist/img/logo.svg') }}" alt="Logo" class="brand-image-xs">
    <span style="font-family: 'Montserrat', cursive;" class="brand-text font-weight-bold text-light text-center">
      MOFFIN
    </span>
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
    <nav class="mt-3 pb-5">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-compact" data-widget="treeview" role="menu" data-accordion="false">
        <!-- DASHBOARD -->
        <li class="nav-item">
          <a href="{{ url('dashboard') }}" class="nav-link">
            <i class="nav-icon bx bx-home-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-header">MASTER</li>

        <!-- PRODUK -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bx-package"></i>
            <p>Produk <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Kategori Produk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Merek Produk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Lokasi Produk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Data Produk</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- PELANGGAN -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bx-user-circle"></i>
            <p>Pelanggan <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Kategori Pelanggan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Data Pelanggan</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- SUPPLIER -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bxs-truck"></i>
            <p>Supplier <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Kategori Supplier</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Data Supplier</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- PEGAWAI -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bx-id-card"></i>
            <p>Pegawai <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Kategori Pegawai</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('pegawai') }}" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Data Pegawai</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- TOKO -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bx-store"></i>
            <p>Toko</p>
          </a>
        </li>

        <li class="nav-header">TRANSAKSI</li>

        <!-- STOCK OPNAME -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bx-archive"></i>
            <p>Stock Opname</p>
          </a>
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
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Purchase Order</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Penerimaan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Tukar Faktur</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Pembayaran Hutang</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-header">KEUANGAN</li>

        <!-- KAS -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bx-dollar-circle"></i>
            <p>Kas</p>
          </a>
        </li>

        <!-- METODE PEMBAYARAN -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bx-wallet"></i>
            <p>Metode Pembayaran</p>
          </a>
        </li>

        <!-- BANK -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bxs-bank"></i>
            <p>Data Bank</p>
          </a>
        </li>

        <li class="nav-header">LAPORAN</li>

        <!-- LAPORAN PRODUK -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bx-clipboard"></i>
            <p>Lap. Produk <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Data Produk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Stok</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Stock Opname</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- LAPORAN PEMBELIAN -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bx-clipboard"></i>
            <p>Lap. Pembelian <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Purchase Order</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Penerimaan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Kartu Hutang</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- LAPORAN PENJUALAN -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bx-clipboard"></i>
            <p>Lap. Penjualan <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Data Pegawai</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Data Pelanggan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Penjualan Harian</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Per Produk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Per Kategori</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Per Merek</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- LAPORAN KEUANGAN -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bx-clipboard"></i>
            <p>Lap. Keuangan <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Margin</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Kas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Omzet</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-radio-circle nav-icon"></i>
                <p>Laba Rugi</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-header">UTILITAS</li>

        <!-- CETAK LABEL -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bx-purchase-tag"></i>
            <p>Cetak Label <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-circle nav-icon"></i>
                <p>Barcode</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="bx bx-circle nav-icon"></i>
                <p>Pricetag</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- FORMAT STRUK -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bx-note"></i>
            <p>Format Struk</p>
          </a>
        </li>

        <!-- DISKON MENU -->
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon bx bxs-discount"></i>
            <p>Diskon Menu</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /Sidebar Menu -->
  </div>
  <!-- /Sidebar -->
</aside>
