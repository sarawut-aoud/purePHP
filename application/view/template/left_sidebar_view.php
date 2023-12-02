<?php

?>
<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion position-relative" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <div class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{base_url}/assets/images/icon.png" alt="" style="width: 50px;">
        </div>
        <div class="sidebar-brand-text mx-3" style="line-height: 14px;">
            <span></span>
            <span></span>
        </div>
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{base_url}dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>หน้าแรก</span></a>
    </li>

    <!-- Divider -->

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item v-collapse">
        <a class="nav-link collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-sliders-h"></i>
            <span>ตั้งค่า</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-bs-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="<?= base_url() ?>">
                    <div class="icon"><i class=""></i></div>
                    <div class="text"> </div>
                </a>

            </div>
        </div>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0 text-color" id="sidebarToggle">
            <i class="fas fa-chevron-left"></i>
        </button>
    </div>

    <div class="sidebar-bottom">
        <hr class="sidebar-divider d-none d-md-block">
        <div class="logout-content-bottom">
            <a href="{base_url}Process/logout">
                <button class="btn btn-danger bottombtnlogout" type="button">
                    <div class="icon"> <i class="fas fa-sign-out-alt"></i> </div>
                    <div class="text">ออกจากระบบ</div>
                </button>
            </a>
        </div>
    </div>
</ul>