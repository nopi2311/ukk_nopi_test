<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>SMKN 4 Tasikmalaya</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

<body>
    <?php include 'navbar.php'; ?>
    <!--  SECTION BERITA -->
    <div class="container py-5">
        <!-- Judul -->
        <div class="mb-4">
            <h2 class="berita-title">Berita <span>Terbaru</span></h2>
            <p>Berita terbaru, cerita inspiratif dan informasi terkini seputar kegiatan sekolah kami.</p>
        </div>

        <!-- Kartu Berita: Semua col-md-6 berada dalam 1 .row -->
        <div class="row g-4">
            <!-- Berita 1 -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm rounded-4">
                    <img src="galeri/beritaa 1.jpg" class="card-img-top" alt="Berita 1">
                    <div class="card-body">
                        <p class="card-text-date mb-1">Senin, 07 Oktober 2024</p>
                        <h5 class="card-title">Kapolsek Cibeureum AKP Nurrozi memberikan penyuluhan...</h5>
                        <a href="https://newstasikmalaya.com/tag/smkn-4-kota-tasikmalaya" class="btn-baca">Baca Selengkapnya →</a>
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
                        <a href="" class="btn-baca">Baca Selengkapnya →</a>
                    </div>
                </div>
            </div>

            <!-- Berita 3 -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm rounded-4">
                    <img src="galeri/honda.jpeg" class="card-img-top" alt="Berita 3">
                    <div class="card-body">
                        <p class="card-text-date mb-1">Senin, 20 Mei 2024</p>
                        <h5 class="card-title">Honda Resmikan Safety Riding Lab di SMKN 4 Tasikmalaya, Ciptakan Bibit Keselamatan di Jawa Barat</h5>
                        <a href="https://www.pikiran-rakyat.com/otomotif/pr-018109177/honda-resmikan-safety-riding-lab-di-smkn-4-tasikmalaya-ciptakan-bibit-keselamatan-pada-gen-z?page=all" class="btn-baca">Baca Selengkapnya →</a>
                    </div>
                </div>
            </div>

            <!-- Berita 4 -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm rounded-4">
                    <img src="galeri/hut ri 3.JPG" class="card-img-top" alt="Berita 4">
                    <div class="card-body">
                        <p class="card-text-date mb-1">Agustus 15, 2025</p>
                        <h5 class="card-title">Jalan sehat HUT RI-80</h5>
                        <a href="" class="btn-baca">Baca Selengkapnya →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--TUTUP BERITA -->
    <?php include 'footer.php'; ?>
    </div>
</body>

</html>