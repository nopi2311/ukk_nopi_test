<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./vendor/bs/bs.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <title>SMKN 4 Tasikmalaya</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <!-- SECTION ESKUL -->

    <section>
        <div class="container px-5 mt-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-0">
                        <h3 class="mb-0 text-center">Ekstrakurikuler</h3>
                        <h3 class="text-primary text-center">Siswa</h3>

                        <div class="  mt-4 text-center">
                            <input type="text" id="searchEskul" class="form-control w-50 d-inline-block" placeholder="Cari ekstrakurikuler..." />
                        </div>

                        <script>
                            const input = document.getElementById('searchEskul');
                            input.addEventListener('keyup', function() {
                                const filter = input.value.toLowerCase();
                                const cards = document.querySelectorAll('[id^="eskul-"]');

                                cards.forEach(card => {
                                    const idName = card.id.replace('eskul-', '').toLowerCase();
                                    const h4Name = card.querySelector('h4').textContent.toLowerCase();

                                    if (idName.includes(filter) || h4Name.includes(filter)) {
                                        card.style.display = '';
                                    } else {
                                        card.style.display = 'none';
                                    }
                                });
                            });
                        </script>




                        <div class="row">
                            <div class="col-lg-4" id="eskul-paskibra">
                                <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                    <img src="galeri/paskibra.png" alt="Paskibra" width="150" height="150" />
                                    <div class="card-body border-0">
                                        <h4>PASKIBRA</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4" id="eskul-pramuka">
                                <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                    <img src="galeri/pramuka.png" alt="Pramuka" width="150" height="150" />
                                    <div class="card-body border-0">
                                        <h4>PRAMUKA</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4" id="eskul-pmr">
                                <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                    <img src="galeri/pmr.png" alt="PMR" width="150" height="150" />
                                    <div class="card-body border-0">
                                        <h4>PMR</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4" id="eskul-plh">
                                <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                    <img src="galeri/plh.png" alt="PLH" width="150" height="150" />
                                    <div class="card-body border-0">
                                        <h4>PLH</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4" id="eskul-perisai-diri">
                                <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                    <img src="galeri/pd.jpg" alt="Perisai Diri" width="150" height="150" />
                                    <div class="card-body text-center border-0">
                                        <h4>PERISAI DIRI</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4" id="eskul-pks">
                                <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                    <img src="galeri/pks.png" alt="PKS" width="150" height="150" />
                                    <div class="card-body text-center border-0">
                                        <h4>PKS</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4" id="eskul-itclub">
                                <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                    <img src="galeri/itclub.png" alt="IT Club" width="150" height="150" />
                                    <div class="card-body border-0">
                                        <h4>IT CLUB</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4" id="eskul-english-club">
                                <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                    <img src="galeri/englishclub.png" alt="English Club" width="150" height="150" />
                                    <div class="card-body border-0">
                                        <h4>ENGLISH CLUB</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4" id="eskul-cinematography">
                                <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                    <img src="galeri/cinema.png" alt="Cinematography" width="150" height="150" />
                                    <div class="card-body border-0">
                                        <h4>CINEMATOGRAPHY</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4" id="eskul-laskar-pustaka">
                                <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                    <img src="galeri/laskar.png" alt="Laskar Pustaka" width="150" height="150" />
                                    <div class="card-body border-0">
                                        <h4>LASKAR PUSTAKA</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4" id="eskul-irma">
                                <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                    <img src="galeri/irma.png" alt="Irma" width="150" height="150" />
                                    <div class="card-body border-0">
                                        <h4>IRMA</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4" id="eskul-bulu-tangkis">
                                <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                    <img src="galeri/bulutangkis.png" alt="Bulu Tangkis" width="150" height="150" />
                                    <div class="card-body border-0">
                                        <h4>BULU TANGKIS</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4" id="eskul-futsal">
                                <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                    <img src="galeri/futsal.png" alt="Futsal" width="150" height="150" />
                                    <div class="card-body border-0">
                                        <h4>FUTSAL</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4" id="eskul-basket">
                                <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                    <img src="galeri/basket.png" alt="Basket" width="150" height="150" />
                                    <div class="card-body border-0">
                                        <h4>BASKET</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4" id="eskul-volly">
                                <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                    <img src="galeri/volly.jpeg" alt="Volly" width="150" height="150" />
                                    <div class="card-body border-0">
                                        <h4>VOLLY</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>

</html>