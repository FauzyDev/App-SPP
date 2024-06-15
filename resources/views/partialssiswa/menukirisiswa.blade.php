<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fa-sharp fa-solid fa-graduation-cap"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dashboard Siswa</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboardsiswa">
            <i class="fa-sharp fa-solid fa-house"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/siswa">
            <i class="fa-sharp fa-solid fa-money-bill-transfer"></i>
            <span>Tagihan SPP</span></a>
        <a class="nav-link" href="/siswa/show">
            <i class="fa-sharp fa-solid fa-money-check-dollar"></i>
            <span>History Pembayaran</span></a>
    </li>
    </li>
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="/profil">
            <i class="fa-sharp fa-solid fa-id-card"></i>
            <span>Profil</span></a>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="nav-link"><i class="fa-sharp fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span></button>
            </form>
    </li>
    <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
</ul>
