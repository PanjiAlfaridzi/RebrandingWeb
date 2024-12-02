<!-- App/Views/v_berita_detail.php -->
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <h2><?= $berita['judul_berita'] ?></h2>
        </div>
    </div>

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries">
                    <article class="entry entry-single">
                        <div class="entry-img">
                            <img src="<?= base_url('foto_berita/' . $berita['gambar_berita']) ?>" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <?= $berita['judul_berita'] ?>
                        </h2>

                        <div class="entry-content">
                            <?= $berita['isi_berita'] ?>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <h3 class="sidebar-title">Berita Terbaru</h3>
                        <div class="sidebar-item recent-posts">
                            <?php if (!empty($berita_terbaru)) : ?>
                                <?php foreach ($berita_terbaru as $recent) : ?>
                                    <div class="post-item clearfix">
                                        <img src="<?= base_url('foto/' . $recent['gambar_berita']) ?>" alt="">
                                        <h4>
                                            <a href="<?= base_url('berita/detail/' . $recent['id_berita']) ?>">
                                                <?= $recent['judul_berita'] ?>
                                            </a>
                                        </h4>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>