<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <h3>Sistem Informasi</h3>
                <h3>Gudang</h3>
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('beranda') ?>">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Beranda</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('masuk') ?>">
                            <i class="ni ni-send text-primary"></i>
                            <span class="nav-link-text">Barang Masuk</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('barang') ?>">
                            <i class="ni ni-box-2"></i>
                            <span class="nav-link-text">Barang</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('kategori') ?>">
                            <i class="ni ni-tag text-yellow"></i>
                            <span class="nav-link-text">Kategori</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('pengguna') ?>">
                            <i class="ni ni-circle-08 text-pink"></i>
                            <span class="nav-link-text">Pengguna</span>
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
            </div>
        </div>
    </div>
</nav>