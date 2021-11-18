<!DOCTYPE html>
<html lang="id">

<head>
    <title>Beranda</title>
    <?php $this->load->view('_includes/head.php') ?>
</head>

<body>
    <!-- Sidenav -->
    <?php $this->load->view('_includes/sidebar.php') ?>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <?php $this->load->view('_includes/navbar.php') ?>
        <!-- Header -->
        <?php $this->load->view('_includes/header.php') ?>
        <!-- Header -->

        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Pengguna</h5>
                                    <span class="h2 font-weight-bold mb-0"><?= $pengguna ?> </span>
                                </div>
                                <div class="col-auto mb-3">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="ni ni-single-02"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Barang</h5>
                                    <span class="h2 font-weight-bold mb-0"><?= $barang ?></span>
                                </div>
                                <div class="col-auto mb-3">
                                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                        <i class="ni ni-box-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Kategori</h5>
                                    <span class="h2 font-weight-bold mb-0"><?= $kategori ?></span>
                                </div>
                                <div class="col-auto mb-3">
                                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                        <i class="ni ni-tag"></i>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0">Data Barang Masuk</h3>
                                </div>
                                <div class="col text-right">
                                    <a href="<?= base_url('masuk') ?>" class="btn btn-sm btn-primary">See all</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <!-- Projects table -->
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Kode Transaksi</th>
                                        <th scope="col">Kode Barang</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Stok Masuk</th>
                                        <th scope="col">Tanggal Masuk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if ($masuk != null) : ?>
                                    <?php foreach ($masuk as $data) : ?>
                                    <tr>
                                        <td scope="row">
                                            <?= $data->kd_transaksi ?>
                                        </td>
                                        <td>
                                            <?= $data->kd_barang ?>
                                        </td>
                                        <td>
                                            <?= $data->nama ?>
                                        </td>
                                        <td>
                                            <?= $data->stok_masuk ?>
                                        </td>
                                        <td>
                                            <?= $data->tanggal ?>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                <?php endif ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php $this->load->view('_includes/footer.php') ?>
        </div>
    </div>
    <?php $this->load->view('_includes/js.php') ?>
</body>

</html>