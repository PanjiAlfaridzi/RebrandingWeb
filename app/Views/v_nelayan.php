<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title"><i class="fa fa-table"></i>Data <?= $judul ?></div>
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
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add">
                <i class="fas fa-plus mr-2"></i>Tambah Data
            </button>
            <table class="table table-bordered-bd-primary table-head-bg-primary mt-3" </table>
                <thead>
                    <tr>
                        <th width="50px">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kota</th>
                        <th scope="50px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($nelayan as $key => $p) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $p['nama'] ?></td>
                            <td><?= $p['alamat'] ?></td>
                            <td><?= $p['kota'] ?></td>
                            <td>
                                <button class="btn btn-warning btn-xs" data-bs-toggle="modal" data-bs-target="#edit<?= $p['id_nelayan']?>"><i class="fa fa-pencil-alt"></i></button>
                                <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#delete<?= $p['id_nelayan']?>"><i class="fa fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Nelayan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php
            echo form_open('Nelayan/InsertData')
            ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nelayan</label>
                    <br>
                    <input name="nama" class="form-control" placeholder="Nama" required>
                    <label>alamat</label>
                    <br>
                    <input name="alamat" class="form-control" placeholder="Alamat" required>
                    <label>kota</label>
                    <br>
                    <input name="kota" class="form-control" placeholder="Kota" required>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php
            echo form_close()
            ?>
        </div>
    </div>
</div>

<?php
foreach ($nelayan as $key => $p) { ?>
<div class="modal fade" id="edit<?= $p['id_nelayan']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Nelayan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php
            echo form_open('Nelayan/UpdateData/' . $p['id_nelayan'])
            ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nelayan</label>
                    <br>
                    <input name="nama" value="<?= $p['nama']?>" class="form-control" placeholder="Nama" required>
                    <label>alamat</label>
                    <br>
                    <input name="alamat" value="<?= $p['alamat']?>" class="form-control" placeholder="Alamat" required>
                    <label>kota</label>
                    <br>
                    <input name="kota" value="<?= $p['kota']?>" class="form-control" placeholder="Kota" required>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            <?php
            echo form_close()
            ?>
        </div>
    </div>
</div>

<div class="modal fade" id="delete<?= $p['id_nelayan']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php
            echo form_open('Nelayan/DeleteData/' . $p['id_nelayan'])
            ?>
            <div class="modal-body">
                Apakah Ingin Hapus Data <b><?= $p['nama'] ?></b> ..?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
            <?php
            echo form_close()
            ?>
        </div>
    </div>
</div>
<?php } ?>

