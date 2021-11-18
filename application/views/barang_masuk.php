<!DOCTYPE html>
<html lang="id">

<head>
    <title>Barang Masuk</title>
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
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <div class="row">
                                <div class="col-10">
                                    <h3 class="mb-0 col">Barang Masuk</h3>
                                </div>
                                <div class="col-2">
                                    <a href="<?= base_url() ?>masuk/tambah" class="btn btn-sm btn-primary col">Tambah data</a>
                                </div>
                            </div>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">Kode Transaksi</th>
                                        <th scope="col" class="sort" data-sort="name">Kode Barang</th>
                                        <th scope="col" class="sort" data-sort="name">Stok</th>
                                        <th scope="col" class="sort" data-sort="name">tanggal</th>
                                        <th scope="col" class="sort" data-sort="completion">Aksi</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <?php if ($masuk != null) : ?>
                                        <?php foreach ($masuk as $data) : ?>
                                            <tr>
                                                <th scope="row">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <span class="name mb-0 text-sm"><?= $data->kd_transaksi ?></span>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span class="name mb-0 text-sm"><?= $data->kd_barang ?></span>
                                                </td>
                                                <td>
                                                    <span class="name mb-0 text-sm"><?= $data->stok_masuk ?></span>
                                                </td>
                                                <td>
                                                    <span class="name mb-0 text-sm"><?= $data->tanggal ?></span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-dot mr-4">
                                                        <a href="<?= base_url() ?>masuk/edit/<?= $data->kd_transaksi ?>" class="btn btn-sm btn-primary">Edit</a>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer py-4">
                            <nav aria-label="...">
                                <ul class="pagination justify-content-end mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">
                                            <i class="fas fa-angle-left"></i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="fas fa-angle-right"></i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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