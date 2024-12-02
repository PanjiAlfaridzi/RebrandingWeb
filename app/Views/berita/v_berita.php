<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title"><i class="fa fa-table"></i> Data <?= $judul ?></div>
        </div>
        <div class="card-body">
            <?php
            if (session()->get('insert')) {
                echo '<div class="alert alert-success">';
                echo session()->get('insert');
                echo '</div>';
            }

            if (session()->get('update')) {
                echo '<div class="alert alert-primary">';
                echo session()->get('update');
                echo '</div>';
            }

            if (session()->get('delete')) {
                echo '<div class="alert alert-danger">';
                echo session()->get('delete');
                echo '</div>';
            }
            ?>
            <a href="<?= base_url('index.php/Berita/Input') ?>" type="button" class="btn btn-primary btn-sm">
                <i class="fas fa-plus mr-2"></i>Tambah Data
            </a>
            <table id="basic-datatables" class="table table-striped table-hover table-bordered-bd-primary table-head-bg-primary mt-3">
                <thead>
                    <tr class="text-center">
                        <th width="50px">#</th>
                        <th scope="col">Judul Berita</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Isi Berita</th>
                        <th scope="col">Tanggal</th>
                        <th width="100px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($berita as $key => $p) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td class="text-center"><?= $p['judul_berita'] ?></td>
                            <td class="text-center"><img src="<?= base_url('foto/' . $p['gambar_berita']) ?>" width="250px" alt=""></td>
                            <td class="text-center"><?= $p['isi_berita'] ?></td>
                            <td><?= $p['tgl_berita'] ?> <?= $p['jam_berita'] ?></td>
                            <td>
                                <button class="btn btn-warning btn-xs" data-bs-toggle="modal" data-bs-target="#edit<?= $p['id_berita'] ?>"><i class="fa fa-pencil-alt"></i></button>
                                <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#delete<?= $p['id_berita'] ?>"><i class="fa fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php foreach ($berita as $key => $p) { ?>
    <div class="modal fade" id="edit<?= $p['id_berita'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Berita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php echo form_open_multipart('Berita/UpdateData/' . $p['id_berita'], ['enctype' => 'multipart/form-data']); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Judul Berita</label>
                        <input name="judul_berita" value="<?= $p['judul_berita'] ?>" class="form-control" placeholder="Judul Berita" required>

                        <label>Isi Berita</label>
                        <input name="isi_berita" value="<?= $p['isi_berita'] ?>" class="form-control" placeholder="Isi Berita" required>

                        <label>Gambar Berita</label>
                        <input type="file" name="gambar_berita" class="form-control">
                        <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengubah gambar.</small>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delete<?= $p['id_berita'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php echo form_open('Berita/DeleteData/' . $p['id_berita']); ?>
                <div class="modal-body">
                    Apakah Ingin Hapus Data <b><?= $p['judul_berita'] ?></b> ..?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
<?php } ?>

<script>
    $(document).ready(function() {
        $('#basic-datatables').DataTable({});
    });
</script>