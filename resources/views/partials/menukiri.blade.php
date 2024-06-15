<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fa-sharp fa-solid fa-cash-register"></i>
        </div>
        <div class="sidebar-brand-text mx-3">DB Admin SPP-APP</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fa-sharp fa-solid fa-house"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        PAGE
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa-sharp fa-solid fa-list"></i>
            <span>Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Semua Data</h6>
                <a class="collapse-item" href="/datakelas"><i class="fa-sharp fa-solid fa-school"></i> Data Kelas</a>
                <a class="collapse-item" href="/datapetugas"><i class="fa-sharp fa-solid fa-users"></i> Data Petugas</a>
                <a class="collapse-item" href="/datasiswa"><i class="fa-sharp fa-solid fa-graduation-cap"></i> Data
                    Siswa</a>
                <a class="collapse-item" href="/dataspp"><i class="fa-sharp fa-solid fa-money-bill"></i> Data SPP</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa-sharp fa-solid fa-credit-card"></i>
            <span>Transaksi</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Semua Taransaksi</h6>
                <a class="collapse-item" href="/pembayaran/create"><i class="fa-sharp fa-solid fa-money-bill-transfer"></i> 
                    Pembayaran</a>
                <a class="collapse-item" href="/pembayaran"><i class="fa-sharp fa-solid fa-money-check-dollar"></i>
                    History Pembayaran</a>
            </div>
        </div>
    </li>

    <div class="sidebar-heading">
        PAGE
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fa-sharp fa-solid fa-print"></i>
            <span>Generate</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">OPTION</h6>
                <a class="collapse-item" href="/admin/laporan/buatlaporan"><i class="fa-sharp fa-solid fa-floppy-disk"></i> 
                    Generate Laporan</a>
            </div>
        </div>
    </li>
    <div class="sidebar-heading">
        PAGE
    </div>
    <li class="nav-item">
        <form action="/logout" method="POST">
            @csrf
            <button type="sumbit" class="nav-tem btn-primary">
                <i class="fa-sharp fa-solid fa-right-from-bracket"></i>
                <span>Logout</span></button>
        </form>
    </li>
    </li>
    </li>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
</ul>
