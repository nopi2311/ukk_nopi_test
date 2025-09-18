<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Guru</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Efek hover pada card */
        .teacher-card {
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .teacher-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.4);
        }

        /* Efek hover pada gambar */
        .teacher-card img {
            transition: 0.3s;
        }

        .teacher-card:hover img {
            filter: brightness(0.8);
        }

        /* Efek hover pada nama */
        .teacher-card h5 {
            transition: color 0.3s;
        }

        .teacher-card:hover h5 {
            color: #0d6efd;
            /* biru bootstrap */
        }
    </style>
</head>

<body>

    <?php include 'navbar.php'; ?>

    <div class="container my-5">
        <h3 class="text-center text-primary mb-5">Daftar Guru </h3>

        <div class="row justify-content-center">
            <!-- Guru 1 -->
            <div class="col-md-2 mb-4">
                <div class="card teacher-card text-center">
                    <img src="galeri/guru 1.jpg" class="card-img-top" alt="Pa Adi">
                    <div class="card-body">
                        <h5 class="card-title">Pa Adi</h5>
                    </div>
                </div>
            </div>

            <!-- Guru 2 -->
            <div class="col-md-2 mb-4">
                <div class="card teacher-card text-center">
                    <img src="galeri/guru 2.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>

            <!-- Guru 3 -->
            <div class="col-md-2 mb-4">
                <div class="card teacher-card text-center">
                    <img src="galeri/guru 3.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>