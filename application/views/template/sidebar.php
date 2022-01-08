<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center mt-3 mb-2" href="<?php echo site_url('crud') ?>">
        <div class="sidebar-brand-icon">
            <img src="<?php echo base_url('assets/image/admin_white.png') ?>" alt="" width="30%" height="30%">
            <span class="font-weight-bold">ADMIN</span>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item mt-5">
        <a class="nav-link" href="<?php echo site_url('crud') ?>">
            <img src="<?php echo base_url('assets/image/dashboard.png') ?>" alt="" width="10%" height="10%">
            <span class="font-weight-bold">DASHBOARD</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('crud/data_mahasiswa') ?>">
            <img src="<?php echo base_url('assets/image/student.png') ?>" alt="" width="10%" height="10%">
            <span class="font-weight-bold">DATA MAHASISWA</span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->