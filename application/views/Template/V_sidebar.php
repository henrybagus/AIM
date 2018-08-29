<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200" style="padding-top: 20px">
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            <li class="nav-item start ">
                <a href="<?= site_url(); ?>" class="nav-link ">
                    <i class="icon-home"></i>
                    <span class="title">Home</span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">Stock Barang</h3>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('penambahan_stock') ?>" class="nav-link ">
                    <span class="title">Penambahan stock</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('pengurangan_stock') ?>" class="nav-link ">
                    <span class="title">Pengurangan stock</span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">Master Data</h3>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('master_barang') ?>" class="nav-link ">
                    <span class="title">Barang</span>
                </a>
            </li> <li class="nav-item">
                <a href="<?php echo site_url('master_merk') ?>" class="nav-link ">
                    <span class="title">Merk</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('master_kategori') ?>" class="nav-link ">
                    <span class="title">Kategori</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('master_satuan') ?>" class="nav-link ">
                    <span class="title">Satuan</span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->