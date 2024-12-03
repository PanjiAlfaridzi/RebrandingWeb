<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title"><i class="fa fa-table"></i> Data <?= $judul ?></div>
        </div>
        <?php echo form_open('Galeri/InsertData', ['enctype' => 'multipart/form-data']); ?>
        <div class="card-body">
            <div class="form-group mb-3">
                <label>Judul Galeri</label>
                <input name="judul_galeri" class="form-control" placeholder="Judul Galeri" required>
            </div>
            <div class="form-group mb-3">
                <label>Gambar Galeri</label>
                <input type="file" name="file_galeri" class="form-control" accept="image/*" required>
                <small class="text-muted">Format: JPG, PNG, GIF</small>
            </div>
            <div class="form-group">
                <a href="<?= base_url('index.php/Galeri') ?>" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <?php echo form_close() ?>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: 'Isi Berita',
            height: 250
        });
    });
</script>