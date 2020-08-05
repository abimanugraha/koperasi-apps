<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?= base_url('dashboard'); ?>">Koperasi Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url('dashboard'); ?>">KS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="<?php if ($this->uri->segment(1, 0) == 'dashboard') echo "active"; ?>"><a class="nav-link" href="<?= base_url('dashboard'); ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <li class="menu-header">Layanan</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cash-register"></i> <span>Transaksi</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="">Simpanan</a></li>
                    <li><a class="nav-link" href="">Pinjaman</a></li>
                    <li><a class="nav-link" href="">Angsuran</a></li>
                    <li><a class="nav-link" href="">Pengambilan</a></li>
                </ul>
            </li>
            <li class="menu-header">Admin</li>
            <li class="nav-item dropdown <?php
                                            $segmen = $this->uri->segment(1, 0);
                                            if ($segmen == 'user') {
                                                echo "active";
                                            } elseif ($segmen == 'anggota') {
                                                echo "active";
                                            } elseif ($segmen == 'jenis') {
                                                echo "active";
                                            }
                                            ?>">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Manajemen</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php if ($this->uri->segment(1, 0) == 'user') echo "active"; ?>"><a class="nav-link" href="<?= base_url('user'); ?>">User</a></li>
                    <li class="<?php if ($this->uri->segment(1, 0) == 'anggota') echo "active"; ?>"><a class="nav-link" href="<?= base_url('anggota'); ?>">Anggota</a></li>
                    <li class="<?php if ($this->uri->segment(1, 0) == 'simpanan') echo "active"; ?>"><a class="nav-link" href="#">Jenis Simpanan</a></li>
                </ul>
            </li>
            <li class=""><a class="nav-link" href="#"><i class="fas fa-print"></i></i> <span>Report</span></a></li>
        </ul>

        <div class="bottom mb-3 p-3 hide-sidebar-mini">
            <a href="<?= base_url('auth/logout'); ?>" class="btn btn-danger btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-out-alt"></i> LOGOUT
            </a>
        </div>
    </aside>
</div>