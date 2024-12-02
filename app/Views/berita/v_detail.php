<h1><?= $judul ?></h1>

<div>
    <?php if (isset($berita) && !empty($berita)): ?>
        <h2><?= $berita['judul_berita'] ?></h2>
        <img src="<?= base_url('foto/' . $berita['gambar_berita']) ?>" alt="Gambar Berita">
        <p><?= $berita['isi_berita'] ?></p>
    <?php else: ?>
        <p>Berita tidak ditemukan</p>
    <?php endif; ?>
</div>