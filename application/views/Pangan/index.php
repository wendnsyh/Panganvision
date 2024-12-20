<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Data Pangan</h6>
        <form class="form-inline" method="get" action="<?= site_url('pangan/index'); ?>">
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Cari Pangan" aria-label="Search" value="<?= $this->input->get('search'); ?>">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Cari</button>
        </form>
        <a href="<?= site_url('pangan/create'); ?>" class="btn btn-primary">Tambah Pangan</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th> <!-- ID akan menjadi nomor urut -->
                        <th>Jenis Pangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $id = 1; // Inisialisasi ID yang dimulai dari 1 ?>
                    <?php foreach ($pangan as $item): ?>
                        <tr>
                            <td><?= $id++; ?></td> <!-- ID diurutkan secara manual -->
                            <td><?= $item['Jenis_Pangan']; ?></td>
                            <td>
                                <a href="<?= site_url('pangan/detail/' . $item['ID_Pangan']); ?>" class="btn btn-info btn-sm">Detail</a>
                                <a href="<?= site_url('pangan/edit/' . $item['ID_Pangan']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= site_url('pangan/delete/' . $item['ID_Pangan']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>