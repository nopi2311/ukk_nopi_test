<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./vendor/bs/bs.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>SMKN 4 Tasikmalaya</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  <style>
    .carousel-item {
      height: 100vh;
      position: relative;
      background-size: cover;
      background-position: center;
    }

    .overlay {
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.55);
    }

    .hero-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #fff;
      font-size: 3rem;
      font-weight: 900;
      text-align: center;
      animation: fadeUp 4s ease-in-out infinite;
    }

    @keyframes fadeUp {
      0% {
        opacity: 0;
        transform: translate(-50%, -30%);
      }

      30%,
      60% {
        opacity: 1;
        transform: translate(-50%, -50%);
      }

      100% {
        opacity: 0;
        transform: translate(-50%, -70%);
      }
    }
  </style>
</head>

<body>
  <?php include 'navbar.php'; ?>

  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">


      <div class="carousel-item active" style="background-image:url('galeri/gerbanngg.png');">
        <div class="overlay"></div>
        <div class="hero-text">Selamat Datang Di Website SMKN 4 Tasikmalaya</div>
      </div>
    </div>
  </div>

  <!-- SECTION STATISTIK -->
  <div class="container my-5">
    <div class="row text-center g-3">

      <!-- Guru -->
      <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
        <div class="card bg-primary text-white h-100">
          <div class="card-body">
            <i class="bi bi-person-video3 display-4"></i>
            <h4 class="mt-3">82 Orang</h4>
            <p>Guru / Pendidik</p>
          </div>
        </div>
      </div>

      <!-- Siswa -->
      <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
        <div class="card bg-primary text-white h-100">
          <div class="card-body">
            <i class="bi bi-people-fill display-4"></i>
            <h4 class="mt-3">1500 Orang</h4>
            <p>Siswa</p>
          </div>
        </div>
      </div>

      <!-- Staf TU -->
      <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
        <div class="card bg-primary text-white h-100">
          <div class="card-body">
            <i class="bi bi-person-badge-fill display-4"></i>
            <h4 class="mt-3">10 Orang</h4>
            <p>Staf TU</p>
          </div>
        </div>
      </div>

      <!-- Ekstrakurikuler -->
      <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
        <div class="card bg-primary text-white h-100">
          <div class="card-body">
            <i class="bi bi-lightbulb-fill display-4"></i>
            <h4 class="mt-3">18</h4>
            <p>Ekstrakurikuler</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- TUTUP SECTION STATISTIK -->

  <!-- SECTION SAMBUTAN -->
  <div class="container my-5">
    <div class="row g-4 align-items-center ">

      <!-- Foto Kepala Sekolah -->
      <h5 class="fw-bold">Sambutan <br><span class="text-primary">Kepala Sekolah</span></h5>
      <div class="col-md-4 text-center">
        <div class="bg-primary p-3 rounded shadow">
          <img src="galeri/kepala sekolah.png" alt="Kepala Sekolah" class="img-fluid rounded ">
        </div>
      </div>

      <!-- Teks Sambutan -->
      <div class="col-md-8 mt-4 mt-md-0">
        <h4 class="fw-bold">Kurniawan S.Pd, M.Pd</h4>
        <p>Assalamualaikum Warahmatullahi Wabarakatuh</p>
        <p>
          Segala puji dan syukur kita panjatkan kehadirat Allah SWT, semoga kita semua ada dalam lindungan-Nya.
          Dan atas perkenan-Nya pula kami dapat menghadirkan website SMK Negeri 4 Tasikmalaya ini.
          Kami berharap dengan adanya website di SMK Negeri 4 Tasikmalaya ini para pengunjung dapat mengenal lebih jauh
          tentang sekolah kami sehingga dapat mempererat tali silaturahmi antara sekolah dengan masyarakat demi kemajuan kita bersama.
        </p>
        <p>
          Tiada gading yang tak retak, website kami ini masih dalam proses pengembangan, masih banyak kekurangan yang harus kami perbaiki.
          Kritik dan sarannya yang membangun sangat kami harapkan untuk pengembangan ke depan.
        </p>
        <p>
          Akhirnya, saya mengucapkan terimakasih yang sebesar-besarnya kepada semua pihak yang tidak dapat disebutkan satu
          persatu atas fasilitasnya yang telah diberikan semoga semua yang kita lakukan bermanfaat bagi masyarakat.
        </p>
        <p>Wassalamu’alaikum Warahmatullahi Wabarakatuh</p>
      </div>

    </div>
  </div>
  <!-- TUTUP SAMBUTAN -->


  <!-- SECTION BERITA -->
  <div class="container py-5">
    <!-- Judul dan Deskripsi -->
    <div class="mb-4">
      <h2 class="berita-title">Berita <span>Terbaru</span></h2>
      <p>
        Berita terbaru, cerita inspiratif dan informasi terkini seputar kegiatan sekolah kami.
      </p>
    </div>

    <!-- Kartu Berita -->
    <div class="row g-4">
      <!-- Berita 1 -->
      <div class="col-md-6">
        <div class="card h-100 shadow-sm rounded-4">
          <img src="galeri/beritaa 1.jpg" class="card-img-top" alt="Berita 1">
          <div class="card-body">
            <p class="card-text-date mb-1">Senin, 07 Oktober 2024</p>
            <h5 class="card-title">Kapolsek Cibeureum AKP Nurrozi memberikan penyuluhan kepada siswa SMKN 4 Tasikmalaya
              terkait larangan knalpot brong dan aksi geng motor.</h5>
            <a href="Berita.php" class="btn-baca">Baca Selengkapnya →</a>
          </div>
        </div>
      </div>

      <!-- Berita 2 -->
      <div class="col-md-6">
        <div class="card h-100 shadow-sm rounded-4">
          <img src="galeri/berita.JPG" class="card-img-top" alt="Berita 2">
          <div class="card-body">
            <p class="card-text-date mb-1">Juni 26, 2025</p>
            <h5 class="card-title">Talkshow with U.S. Interns English Club SMKN 4 Tasikmalaya 2025</h5>
            <a href="Berita.php" class="btn-baca">Baca Selengkapnya →</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Tombol Berita Lainnya -->
    <div class="text-center mt-5 ">
      <a href="Berita.php" class="btn btn-primary">Berita Lainnya</a>
    </div>
  </div>

  <!-- TUTUP SECTION BERITA -->
  <?php include 'footer.php'; ?>
</body>

</html>