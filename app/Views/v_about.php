<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<!-- article begin -->
<section id="article" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">About Us</h1>
            <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
                <div class="col">
                  <div class="card h-100">
                    <img src="<?= base_url() ?>assets/img/slides-3.jpg"
                    class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Pembelajaran</h5>
                      <p class="card-text">Proses pembelajaran dirancang untuk membentuk siswa yang cerdas, kritis, dan siap menghadapi tantangan zaman. Dengan pendekatan yang interaktif dan kolaboratif, siswa didorong untuk aktif bertanya, berdiskusi, dan mengeksplorasi berbagai bidang ilmu.
Kurikulum kami tidak hanya berfokus pada akademik, tetapi juga menanamkan nilai-nilai karakter, kreativitas, dan kepedulian sosial. Guru-guru kami adalah tenaga pengajar berpengalaman dan berdedikasi tinggi untuk membimbing siswa mencapai potensi terbaik mereka.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="<?= base_url() ?>assets/img/slides-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Fasilitas</h5>
                      <p class="card-text">Menyediakan berbagai fasilitas modern untuk menunjang kenyamanan dan kualitas belajar siswa. Mulai dari ruang kelas yang dilengkapi proyektor, perpustakaan digital, laboratorium IPA, hingga ruang multimedia dan studio musik.
Tidak hanya itu, tersedia juga lapangan olahraga, kantin bersih, area diskusi terbuka, serta koneksi Wi-Fi di berbagai titik sekolah. Kami percaya bahwa lingkungan belajar yang nyaman dan lengkap akan mendukung perkembangan akademik maupun non-akademik siswa secara maksimal.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="<?= base_url() ?>assets/img/slides-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Lulusan</h5>
                      <p class="card-text"> Telah membuktikan diri sebagai generasi yang unggul, berprestasi, dan berkarakter. Banyak di antara mereka yang melanjutkan studi ke perguruan tinggi ternama, baik di dalam maupun luar negeri.
Selain prestasi akademik, para alumni juga dikenal aktif di berbagai bidang seperti organisasi, kewirausahaan, dan pengabdian masyarakat. Kami bangga menjadi bagian dari perjalanan mereka dalam membentuk masa depan yang cerah dan penuh makna. </p>
                    </div>
                  </div>
                </div>
        </div>
    </section>
    <!-- article end -->
<?= $this->endSection() ?>