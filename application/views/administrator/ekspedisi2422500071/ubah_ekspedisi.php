<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ubah Ekspedisi</h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('admin') ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('admin/ekspedisi2422500071') ?>">Ekspedisi</a>
                        </li>
                        <li class="breadcrumb-item active">Ubah Ekspedisi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title d-block mb-3" style="float: none;">Ubah Ekspedisi</h5>
                            <form method="post">
                                <!-- Nama Ekspedisi -->
                                <div class="mb-3">
                                    <label for="nama_ekspedisi071" class="form-label">
                                        Nama Ekspedisi
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_ekspedisi071"
                                        id="nama_ekspedisi071"
                                        value="<?= html_escape($ekspedisi['nama_ekspedisi071']) ?>"
                                        required>
                                </div>

                                <!-- Jenis Layanan -->
                                <div class="mb-3">
                                    <label for="jenis_layanan071" class="form-label">
                                        Jenis Layanan
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="jenis_layanan071"
                                        id="jenis_layanan071"
                                        value="<?= html_escape($ekspedisi['jenis_layanan071']) ?>">
                                </div>

                                <!-- Tarif Per Kg -->
                                <div class="mb-3">
                                    <label for="tarif_per_kg071" class="form-label">
                                        Tarif Per Kg
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="tarif_per_kg071"
                                        id="tarif_per_kg071"
                                        value="<?= html_escape($ekspedisi['tarif_per_kg071']) ?>">
                                </div>

                                <!-- Status -->
                                <div class="mb-3">
                                    <label for="status071" class="form-label">
                                        Status
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="status071"
                                        id="status071"
                                        value="<?= html_escape($ekspedisi['status071']) ?>">
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Simpan Perubahan
                                </button>
                                <a href="<?= base_url('admin/ekspedisi2422500071') ?>"
                                    class="btn btn-danger">
                                    Kembali
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->