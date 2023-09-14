<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="./index.html" class="text-nowrap logo-img">
                <a class="navbar-brand" href="#"><img src="{{ asset('landingpage/images/matbeken2.png') }}" style="width: 250px; height: auto;"></a>
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          @if (Illuminate\Support\Facades\Auth::user()->role == 'admin')
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Admin Menu</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('databarang.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Data Barang</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('datatransaksi.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-alert-circle"></i>
                        </span>
                        <span class="hide-menu">Data Transaksi</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('datapembayaran.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-cards"></i>
                        </span>
                        <span class="hide-menu">Data Pembayaran</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('datauser.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-cards"></i>
                        </span>
                        <span class="hide-menu">User Management</span>
                    </a>
                </li>
            </ul>
            @endif
            @if (Illuminate\Support\Facades\Auth::user()->role == 'user')
                <a href="#">Menu User</a>
                <ul id="sidebar-item">
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">User Menu</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('usermenu.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-layout-dashboard"></i>
                            </span>
                            <span class="hide-menu">Dashboard Penjualan</span>
                        </a>
                    </li>
                </ul>
            @endif

            @if (Illuminate\Support\Facades\Auth::user()->role == 'owner')
                <ul id="sidebar-item">
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Owner Menu</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('laporanpenjualan.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-article"></i>
                            </span>
                            <span class="hide-menu">Laporan Penjualan</span>
                        </a>
                    </li>
                </ul>
            @endif
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
