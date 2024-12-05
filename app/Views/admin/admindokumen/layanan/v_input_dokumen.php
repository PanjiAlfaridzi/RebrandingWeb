<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title"><i class="fa fa-table"></i>Data <?= $judul ?></div>
        </div>
        <?php echo form_open('layanan/InsertData', ['enctype' => 'multipart/form-data']); ?>
        <div class="card-body">
            <div class="form-group">
                <label>Judul Dokumen</label>
                <input name="judul_dokumen" class="form-control" placeholder="Judul Dokumen">
            </div>
            <div class="form-group">
                <label>File PDF</label>
                <input type="file" name="file_dokumen" class="form-control" accept=".pdf" required>
                <small class="form-text text-muted">Upload file PDF. Maksimal ukuran 5MB</small>
            </div>
            <div class="form-group">
                <a href="<?= base_url('index.php/dokumen') ?>" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <?php echo form_close() ?>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Validate PDF file size before form submission
        $('form').on('submit', function(e) {
            var pdfInput = $('input[name="file_pdf"]')[0];
            if (pdfInput.files.length > 0) {
                var fileSize = pdfInput.files[0].size / 1024 / 1024; // in MB
                if (fileSize > 5) {
                    alert('Ukuran file PDF tidak boleh lebih dari 5MB');
                    e.preventDefault();
                    return false;
                }
            }
        });
    });
</script>