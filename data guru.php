<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./vendor/bs/bs.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <title>SMKN 4 Tasikmalaya</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <style>
        /* Efek hover pada card */
        .teacher-card {
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
            background-color: rgba(255, 255, 255, 0.85);
            border: none;
            border-radius: 8px;
            overflow: hidden;
        }

        .teacher-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.6);
        }

        /* Efek hover pada gambar */
        .teacher-card img {
            transition: 0.3s;
            object-fit: cover;
            height: 180px;
            width: 100%;
        }

        .teacher-card:hover img {
            filter: brightness(0.8);
        }

        /* Efek hover pada nama */
        .teacher-card h5 {
            transition: color 0.3s;
            margin-top: 10px;
            font-weight: 600;
        }

        .teacher-card:hover h5 {
            color: #0d6efd;
        }

        /* Footer style */
        footer {
            background-color: #222;
            color: #eee;
            padding: 20px 0;
        }

        footer a {
            color: #eee;
            margin: 0 10px;
            font-size: 1.5rem;
            transition: color 0.3s;
        }

        footer a:hover {
            color: #0d6efd;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <?php include 'navbar.php'; ?>

    <div class="container my-5 content-background">
        <h3 class="text-center text-primary mb-5">Daftar Guru</h3>

        <div class="row justify-content-center">
            <!-- Guru 1 -->
            <div class="col-md-2 mb-4">
                <div class="card teacher-card text-center">
                    <img src="galeri/guruu 4.jpg" alt="" />
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>

            <!-- Guru 2 -->
            <div class="col-md-2 mb-4">
                <div class="card teacher-card text-center">
                    <img src="galeri/guruu  2.jpg" alt="" />
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>

            <!-- Guru 3 -->
            <div class="col-md-2 mb-4">
                <div class="card teacher-card text-center">
                    <img src="galeri/guru 3.jpg" alt="" />
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>

            <!-- Guru 4 -->
            <div class="col-md-2 mb-4">
                <div class="card teacher-card text-center">
                    <img src="galeri/guruu 1.jpg" alt="" />
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>

            <!-- Guru 5 -->
            <div class="col-md-2 mb-4">
                <div class="card teacher-card text-center">
                    <img src="galeri/guru 6.jpg" alt="" />
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>

            <!-- Guru 6 -->
            <div class="col-md-2 mb-4">
                <div class="card teacher-card text-center">
                    <img src="galeri/guru 7.jpg" alt="" />
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>

            <!-- Guru 7 -->
            <div class="col-md-2 mb-4">
                <div class="card teacher-card text-center">
                    <img src="galeri/guru 8.jpg" alt="" />
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>

            <!-- Guru 8 -->
            <div class="col-md-2 mb-4">
                <div class="card teacher-card text-center">
                    <img src="galeri/guru 9.jpg" alt="" />
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>

            <!-- Guru 9 -->
            <div class="col-md-2 mb-4">
                <div class="card teacher-card text-center">
                    <img src="" alt="" />
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>

            <!-- Guru 10 -->
            <div class="col-md-2 mb-4">
                <div class="card teacher-card text-center">
                    <img src="galeri/guru 10.jpg" alt="" />
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