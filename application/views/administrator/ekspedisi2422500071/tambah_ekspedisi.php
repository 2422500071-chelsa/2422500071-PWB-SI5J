<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
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
                            <h5 class="card-title mb-3">Tambah ekspedisi</h5>

                            <div class="card-text">
                                <form method="post">
                                    <div class="mb-3">
                                        <label for="nama_ekspedisi071" class="form-label">Nama Ekspedisi</label>
                                        <input type="text" class="form-control" name="nama_ekspedisi071" id="nama_ekspedisi071" aria-describedby="Nama Ekspedisi">
                                    </div>

                                    <div class="mb-3">
                                        <label for="jenis_layanan071" class="form-label">Jenis Layanan</label>
                                        <input type="text" class="form-control" name="jenis_layanan071" id="jenis_layanan071" aria-describedby="Jenis Layanan">
                                    </div>

                                    <div class="mb-3">
                                        <label for="tarif_per_kg071" class="form-label">Tarif Per Kg</label>
                                        <input type="text" class="form-control" name="tarif_per_kg071" id="tarif_per_kg071" aria-describedby="Tarif Per Kg">
                                    </div>

                                    <div class="mb-3">
                                        <label for="status071" class="form-label">Status</label>
                                        <input type="text" class="form-control" name="status071" id="status071" aria-describedby="Status">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                    <a href="<?= base_url('admin/ekspedisi') ?>" class="btn btn-danger">Kembali</a>
                                </form>
                            </div>
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