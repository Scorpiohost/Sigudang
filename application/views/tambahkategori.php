<!DOCTYPE html>
<html lang="id">

<head>
    <title>Tambah kategori</title>
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
                                <h3 class="mb-0 col">Tambah kategori</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <input type="kategori" class="form-control" id="kategori" name="kategori" value="<?= set_value('kategori') ?>" aria-describedby="emailHelp">
                                    <?= form_error('kategori') ?>
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