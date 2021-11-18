<!DOCTYPE html>
<html lang="id">

<head>
    <title>Kategori</title>
    <?php $this->load->view('_includes/head.php') ?>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/sweetalert2.min.css">
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
                                    <h3 class="mb-0 col">Kategori</h3>
                                </div>
                                <div class="col-2">
                                    <a href="<?= base_url() ?>kategori/tambah" class="btn btn-sm btn-primary col">Tambah data</a>
                                </div>
                            </div>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">No.</th>
                                        <th scope="col" class="sort" data-sort="name">Kategori</th>
                                        <th scope="col" class="sort" data-sort="completion">Aksi</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <?php if ($kategori != null) : ?>
                                        <?php $i = 1; ?>
                                        <?php foreach ($kategori as $data) : ?>
                                            <tr>
                                                <th scope="row">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <span class="name mb-0 text-sm"><?= $i++ ?></span>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span class="name mb-0 text-sm"><?= $data->kategori ?></span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-dot mr-4">
                                                        <a href="<?= base_url() ?>kategori/edit/<?= $data->id ?>" class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="<?= base_url() ?>kategori/hapus/<?= $data->id ?>" class="btn btn-sm btn-danger hapus">Hapus</a>
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
    <script src="<?= base_url() ?>/assets/dist/sweetalert2.min.js"></script>
    <script src="<?= base_url() ?>/assets/dist/sweetalertnotif.js"></script>
</body>

</html>