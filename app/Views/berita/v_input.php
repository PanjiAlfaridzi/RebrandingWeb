<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title"><i class="fa fa-table"></i>Data <?= $judul ?></div>
        </div>
        <?php
        echo form_open('Berita/InsertData')
        ?>
        <div class="card-body">
            <div class="form-group">
                <label>Judul Berita</label>
                <input name="judul_berita" class="form-control" placeholder="Judul Berita">
            </div>
            <div class="form-group">
                <label>Isii Berita</label>
                <textarea  id="summernote" name="isi_berita"></textarea>
            </div>
            <div class="form-group">
                <label>Gambar Berita</label>
                <input type="file" name="gambar_berita" class="form-control" accept="image/*" required>
            </div>
            <div class="form-group">
                <a href="<?= base_url('index.php/Berita') ?>" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

        </div>
        <?php
        echo form_close()
        ?>
    </div>
</div>

<script>
    $('#summernote').summernote({
        placeholder: 'Isi Berita',
        height: 250
    });
</script>