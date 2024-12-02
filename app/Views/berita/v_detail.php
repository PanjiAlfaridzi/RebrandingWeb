<h1><?= $judul ?></h1>

<div>
    <h2><?= $berita['judul_berita'] ?></h2>
    <img src="<?= base_url('foto/' . $berita['gambar_berita']) ?>" alt="Gambar Berita">
    <p><?= $berita['isi_berita'] ?></p>
</div>

<a href="<?= base_url('home') ?>">Kembali ke Daftar Berita</a>