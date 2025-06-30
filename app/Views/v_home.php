<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- hero begin -->
<section id="hero" class="text-center p-5 pt-5 pb-5 bg-danger-subtle">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <img
          class="img-fluid mx-auto d-block mb-4"
          src="<?= base_url() ?>assets/img/slides-1.jpg"
          alt="Gambar Hero"
          width="800"
        />
      </div>
      <div class="col-lg-10">
        <h1 class="fw-bold display-4">Building Dreams, One Step at a Time</h1>
        <h4 class="lead mt-3">
          "Welcome to SMA 1 Semarang, where young minds grow, dreams take shape, and friendships last a lifetime. Here, learning is more than just books — it's about discovering your potential, building character, and preparing for a bright future. Every moment at school is a step toward becoming the best version of yourself."
        </h4>
      </div>
    </div>
  </div>
</section>
<!-- hero end -->
 <!-- gallery begin -->
 <section id="gallery" class="text-center p-5 bg-danger-subtle">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img           src="<?= base_url() ?>assets/img/news-1.jpg"
                  class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img           src="<?= base_url() ?>assets/img/news-2.jpg"
                  class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img           src="<?= base_url() ?>assets/img/news-3.jpg"
                  class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img           src="<?= base_url() ?>assets/img/news-4.jpg"
                  class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img           src="<?= base_url() ?>assets/img/news-5.jpg"
                  class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img           src="<?= base_url() ?>assets/img/news-6.jpg"
                   class="d-block w-100" alt="...">
                </div>          
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        </div>
    </section>
    <!-- gallery end -->

    <div class="text-center">
    <h1 class=" fw-bold display-4 pb-3"><br>~~ Shop ~~</h1>
    <h4 class="lead mt-3">
      "👇To purchase a uniform, please click the logo below.👇"    
    </h4>
    <a href="shop"><i class="bi bi-shop h2 p-2 text-dark"></i></a>
    </div>

<?= $this->endSection() ?>
