<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Profil Pelanggan</h5>
                    <a href="<?= base_url() ?>" class="btn btn-outline-light btn-sm">Kembali</a>
                </div>
                <div class="card-body">
                    <?php if (!empty($pelanggan)) : ?>
                        <table class="table table-borderless mb-0">
                            <tr>
                                <th width="30%">Nama Lengkap</th>
                                <td width="5%">:</td>
                                <td><?= htmlspecialchars($pelanggan['nama_pelanggan'] ?? '-', ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>:</td>
                                <td><?= htmlspecialchars($pelanggan['email'] ?? '-', ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                            <tr>
                                <th>No. Telepon</th>
                                <td>:</td>
                                <td><?= htmlspecialchars($pelanggan['telp_pelanggan'] ?? '-', ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>:</td>
                                <td><?= nl2br(htmlspecialchars($pelanggan['alamat'] ?? '-', ENT_QUOTES, 'UTF-8')) ?></td>
                            </tr>
                            <tr>
                                <th>Kota</th>
                                <td>:</td>
                                <td><?= htmlspecialchars($pelanggan['kota'] ?? '-', ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                            <tr>
                                <th>Provinsi</th>
                                <td>:</td>
                                <td><?= htmlspecialchars($pelanggan['provinsi'] ?? '-', ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                            <tr>
                                <th>Kode Pos</th>
                                <td>:</td>
                                <td><?= htmlspecialchars($pelanggan['kode_pos'] ?? '-', ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                        </table>
                    <?php else : ?>
                        <div class="alert alert-warning mb-0">
                            Data pelanggan tidak ditemukan.
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>