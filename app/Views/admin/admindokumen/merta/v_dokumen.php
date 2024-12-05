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
            <a href="<?= base_url('index.php/Merta/Input') ?>" type="button" class="btn btn-primary btn-sm">
                <i class="fas fa-plus mr-2"></i>Tambah Data
            </a>
            <table id="basic-datatables" class="table table-striped table-hover table-bordered-bd-primary table-head-bg-primary mt-3">
                <thead>
                    <tr class="text-center">
                        <th width="50px">#</th>
                        <th scope="col">Judul Dokumen</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Tanggal</th>
                        <th width="100px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($dokumen as $key => $p) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td class="text-center"><?= $p['judul_dokumen'] ?></td>
                            <td class="text-center">
                                <embed
                                    src="<?= base_url('/image//' . $p['file_dokumen']) ?>"
                                    type="application/pdf"
                                    width="250px"
                                    height="200px">
                                <!-- Tambahkan tombol download -->
                                <br>
                                <a href="<?= base_url('/image/fmerta/' . $p['file_dokumen']) ?>"
                                    class="btn btn-sm btn-primary mt-2"
                                    download>
                                    <i class="fa fa-download"></i> Download PDF
                                </a>
                            </td>
                            <td><?= $p['tgl_dokumen'] ?> <?= $p['jam_dokumen'] ?></td>
                            <td>
                                <button class="btn btn-warning btn-xs" data-bs-toggle="modal" data-bs-target="#edit<?= $p['id_merta'] ?>">
                                    <i class="fa fa-pencil-alt"></i>
                                </button>
                                <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#delete<?= $p['id_merta'] ?>">
                                    <i class="fa fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php foreach ($dokumen as $key => $p) { ?>
    <div class="modal fade" id="edit<?= $p['id_merta'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Dokumen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php echo form_open_multipart('Merta/UpdateData/' . $p['id_merta'], ['enctype' => 'multipart/form-data']); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Judul Dokumen</label>
                        <input name="judul_dokumen" value="<?= $p['judul_dokumen'] ?>" class="form-control" placeholder="Judul dokumen" required>

                        <label>dokumen</label>
                        <input type="file" name="file_dokumen" class="form-control">
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

    <div class="modal fade" id="delete<?= $p['id_merta'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php echo form_open('Merta/DeleteData/' . $p['id_merta']); ?>
                <div class="modal-body">
                    Apakah Ingin Hapus Data <b><?= $p['judul_dokumen'] ?></b> ..?
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