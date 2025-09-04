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

    <!-- SECTION GALERI -->
    <?php
    $galeri = [
        'galeri/galeri.JPG',
        'galeri/hut ri 1JPG.JPG',
        'galeri/hut ri 2.JPG',
        'galeri/hut ri 3.JPG',
        'galeri/galeri.JPG',
        'galeri/galeri.JPG'
    ];
    $i = 0;
    ?>


    <div class="container mt-5 my-5">
        <div class="card shadow p-4">
            <h3 class="text-center"> Peringatan HUT RI Ke-80</h3>
            <hr>
            <div class="row g-3">
                <?php while ($i < count($galeri)): ?>
                    <div class="col-md-4 col-sm-6">
                        <img src="<?= $galeri[$i] ?>" class="img-fluid rounded">
                    </div>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

    <?php
    $galeri = [
        'galeri/permataa1.jpeg',
        'galeri/permataa2.jpeg',
        'galeri/permataa 3.jpeg',
        'galeri/permataa 4.jpeg',
        'galeri/permataa 5.jpeg',
        'galeri/permataa 6.jpeg'
    ];
    $i = 0;
    ?>


    <div class="container mt-5 my-5">
        <div class="card shadow p-4">
            <h3 class="text-center">Permata 2025</h3>
            <hr>
            <div class="row g-3">
                <?php while ($i < count($galeri)): ?>
                    <div class="col-md-4 col-sm-6">
                        <img src="<?= $galeri[$i] ?>" class="img-fluid rounded">
                    </div>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

    <?php
    $galeri = [
        'galeri/mbg 1.JPG',
        'galeri/mbg 2.jpg',
        'galeri/mbg 3.jpg',
        'galeri/mbg 4.JPG',
        'galeri/mbg 5.jpg',
        'galeri/mbg6.jpg'
    ];
    $i = 0;
    ?>


    <div class="container mt-5 my-5">
        <div class="card shadow p-4">
            <h3 class="text-center">Mbg 2025</h3>
            <hr>
            <div class="row g-3">
                <?php while ($i < count($galeri)): ?>
                    <div class="col-md-4 col-sm-6">
                        <img src="<?= $galeri[$i] ?>" class="img-fluid rounded">
                    </div>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

    <!-- TUTUP SECTION GALERI -->

    <?php include 'footer.php'; ?>

</body>

</html>