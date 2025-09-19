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
    <?php
    // Array data ekstrakurikuler
    $eskulList = [
        ['id' => 'paskibra', 'nama' => 'PASKIBRA', 'gambar' => 'galeri/paskibra.png'],
        ['id' => 'pramuka', 'nama' => 'PRAMUKA', 'gambar' => 'galeri/pramuka.png'],
        ['id' => 'pmr', 'nama' => 'PMR', 'gambar' => 'galeri/pmr.png'],
        ['id' => 'plh', 'nama' => 'PLH', 'gambar' => 'galeri/plh.png'],
        ['id' => 'perisai-diri', 'nama' => 'PERISAI DIRI', 'gambar' => 'galeri/pd.jpg'],
        ['id' => 'pks', 'nama' => 'PKS', 'gambar' => 'galeri/pks.png'],
        ['id' => 'itclub', 'nama' => 'IT CLUB', 'gambar' => 'galeri/itclub.png'],
        ['id' => 'english-club', 'nama' => 'ENGLISH CLUB', 'gambar' => 'galeri/englishclub.png'],
        ['id' => 'cinematography', 'nama' => 'CINEMATOGRAPHY', 'gambar' => 'galeri/cinema.png'],
        ['id' => 'laskar-pustaka', 'nama' => 'LASKAR PUSTAKA', 'gambar' => 'galeri/laskar.png'],
        ['id' => 'irma', 'nama' => 'IRMA', 'gambar' => 'galeri/irma.png'],
        ['id' => 'bulu-tangkis', 'nama' => 'BULU TANGKIS', 'gambar' => 'galeri/bulutangkis.png'],
        ['id' => 'futsal', 'nama' => 'FUTSAL', 'gambar' => 'galeri/futsal.png'],
        ['id' => 'basket', 'nama' => 'BASKET', 'gambar' => 'galeri/basket.png'],
        ['id' => 'volly', 'nama' => 'VOLLY', 'gambar' => 'galeri/volly.jpeg'],
    ];
    ?>

    <section>
        <div class="container px-5 mt-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-0">
                        <h3 class="mb-0 text-center">Ekstrakurikuler</h3>
                        <h3 class="text-primary text-center">Siswa</h3>

                        <div class="mt-4 mb-4 text-center">
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
                            <?php foreach ($eskulList as $eskul): ?>
                                <div class="col-lg-4 mb-4" id="eskul-<?= htmlspecialchars($eskul['id']); ?>">
                                    <div class="card shadow rounded p-4 d-flex align-items-center text-center">
                                        <img src="<?= htmlspecialchars($eskul['gambar']); ?>" alt="<?= htmlspecialchars($eskul['nama']); ?>" width="150" height="150" />
                                        <div class="card-body border-0">
                                            <h4><?= htmlspecialchars($eskul['nama']); ?></h4>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>

</html>