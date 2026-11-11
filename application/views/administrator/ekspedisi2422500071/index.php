
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
                            <h5 class="card-title">Ekspedisi</h5>

                            <p class="card-text">
                                <a href="<?= base_url('admin/ekspedisi2422500071/tambah') ?>"
                                   class="btn btn-labeled btn-primary">
                                    <span class="btn-label">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                    Ekspedisi
                                </a>
                            </p>

                            <div class="card-body">
                                <?php if ($this->session->flashdata('message')) : ?>
                                    <?= $this->session->flashdata('message') ?>
                                <?php endif; ?>

                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Ekspedisi</th>
                                            <th>Jenis Layanan</th>
                                            <th>Tarif Per Kg</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
        <?php
        $no = 1;
        foreach ($list_ekspedisi as $ekspedisi) :
        ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $ekspedisi['nama_ekspedisi071']; ?></td>
                <td><?= $ekspedisi['jenis_layanan071']; ?></td>
                <td><?= $ekspedisi['tarif_per_kg071']; ?></td>
                <td><?= $ekspedisi['status071']; ?></td>
                <td>
                    <a href="<?= base_url('admin/ekspedisi2422500071/ubah/' . $ekspedisi['id_ekspedisi071']) ?>">
                        <span class="badge bg-success">Ubah</span>
                    </a>

                    <a href="<?= base_url('admin/ekspedisi2422500071/hapus/' . $ekspedisi['id_ekspedisi071']) ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">
                        <span class="badge bg-danger">Hapus</span>
                    </a>
                </td>
            </tr>
        <?php
            $no++;
        endforeach;
        ?>
    </tbody>
                                </table>
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
