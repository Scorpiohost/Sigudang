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
                                    <label for="kode" class="form-label">Kode Barang</label>
                                    <input type="text" class="form-control" id="kode" name="kode" value="<?= set_value('kode') ?>" aria-describedby="emailHelp">
                                    <?= form_error('kode') ?>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Barang</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama') ?>" aria-describedby="emailHelp">
                                    <?= form_error('nama') ?>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <div class="combobox">
                                        <select class="form-select" id="kategori" name="kategori" value="<?= set_value('kategori') ?>" aria-describedby="emailHelp">
                                            <?php if ($kategori != null) : ?>
                                                <?php foreach ($kategori as $data) : ?>
                                                    <option value="<?= $data->id ?>"><?= $data->kategori ?></option>
                                                <?php endforeach ?>
                                            <?php endif ?>
                                        </select>
                                    </div>
                                    <?= form_error('kategori') ?>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Stok</label>
                                    <input type="text" class="form-control" id="stok" name="stok" value="<?= set_value('stok') ?>" aria-describedby="emailHelp">
                                    <?= form_error('stok') ?>
                                </div>
                                <div class="button">
                                    <button class="btn btn-primary">Tambah</button>
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