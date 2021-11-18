<!DOCTYPE html>
<html lang="id">

<head>
    <title>Tambah Barang</title>
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
                <div class="col">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row">
                                <h3 class="mb-0 col">Tambah Barang</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="kode" class="form-label">Kode Transaksi</label>
                                    <input type="text" class="form-control" id="kode" name="kode" value="<?= $info->kd_transaksi ?>" aria-describedby="emailHelp">
                                    <?= form_error('kode') ?>
                                </div>
                                <div class="mb-3">
                                    <label for="barang" class="form-label">Kode Barang</label>
                                    <div class="combobox">
                                        <select class="form-select" id="barang" name="barang" value="<?= $info->kd_barang ?>" aria-describedby="emailHelp">
                                            <?php if ($barang != null) : ?>
                                                <?php foreach ($barang as $data) : ?>
                                                    <option value="<?= $data->kd_barang ?>"><?= $data->kd_barang ?></option>
                                                <?php endforeach ?>
                                            <?php endif ?>
                                        </select>
                                    </div>
                                    <?= form_error('barang') ?>
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="form-label">Stok Masuk</label>
                                    <input type="text" class="form-control" id="stok" name="stok" value="<?= $info->stok_masuk ?>" aria-describedby="emailHelp">
                                    <?= form_error('stok') ?>
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" id="date" name="date" value="<?= $info->tanggal ?>" aria-describedby="emailHelp">
                                    <?= form_error('date') ?>
                                </div>
                                <div class="button">
                                    <button class="btn btn-primary">Edit</button>
                                </div>
                            </form>
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