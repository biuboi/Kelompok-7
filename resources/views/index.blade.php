<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyMusic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #232526 0%, #414345 100%);
            min-height: 100vh;
        }
        .music-theme {
            background: linear-gradient(135deg, #ff512f 0%, #dd2476 100%);
            color: #fff;
        }
        .music-card {
            background: #232526;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.2);
            color: #fff;
            transition: transform 0.2s;
        }
        .music-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 32px #dd2476aa;
        }
        /* Navbar style match musik.blade.php */
        .navbar {
            display: flex !important;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding: 0.5rem 1rem;
        }
        .navbar-nav {
            display: flex !important;
            flex-direction: row;
            gap: 1rem;
        }
        .navbar-nav .nav-link {
            color: #fff !important;
            font-weight: 500;
            transition: color 0.2s;
        }
        .navbar-nav .nav-link.active, .navbar-nav .nav-link:hover {
            color: #ffe066 !important;
            text-decoration: underline;
        }
        .navbar-brand {
            color: #fff !important;
            font-weight: bold;
            font-size: 1.3rem;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>
    <nav class="navbar music-theme shadow">
        <a class="navbar-brand" href="/">MyMusic <span class="text-yellow-300">🎵</span></a>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="/musik">Musik</a></li>
            <li class="nav-item"><a class="nav-link" href="/band">Band</a></li>
        </ul>
    </nav>

    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="text-4xl font-bold text-white drop-shadow-lg">Band HINDIA</h2>
        </div>
        <div class="row align-items-center shadow-lg p-4 mb-5">
            <div class="col-md-2 text-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxt-k7S5qalsIb-57AyRlElKIKZrSU0cTBfXcnfHfgaV5JoT7AS9RTZtY52QuO1NrD90w&usqp=CAUx"
                     alt="HINDIA"
                     class="rounded-full shadow-lg mx-auto border-4 border-pink-400 object-cover"
                     style="width: 160px; height: 160px; background: #fff; box-shadow: 0 4px 24px rgba(221,36,118,0.15);">
            </div>
            <div class="col-md-8 text-white">
                <p class="text-lg mb-2">
                    <strong>Hindia</strong> adalah proyek solo dari musisi Indonesia Baskara Putra. Hindia dikenal dengan lirik-liriknya yang jujur dan menyentuh, serta musik yang menggabungkan unsur pop, indie, dan elektronik. Album debutnya, <em>Menari Dengan Bayangan</em> (2019), mendapat banyak pujian dan melahirkan lagu-lagu populer seperti "Secukupnya" dan "Evaluasi".
                </p>
                <ul class="list-disc ps-5">
                    <li><strong>Asal:</strong> Indonesia</li>
                    <li><strong>Genre:</strong> Indie, Pop, Elektronik</li>
                    <li><strong>Tahun Aktif:</strong> 2018 - sekarang</li>
                </ul>
            </div>
        </div>

        <div class="mb-5">
            <h3 class="text-2xl font-semibold text-pink-300 mb-3">Lagu Populer Hindia</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="music-card p-4 flex flex-col items-center">
                    <span class="text-4xl mb-2">🎶</span>
                    <h4 class="font-bold">Secukupnya</h4>
                    <div class="text-sm text-pink-200">Album: Menari Dengan Bayangan</div>
                    <div class="text-xs text-gray-300 mb-2">2019</div>
                </div>
                <div class="music-card p-4 flex flex-col items-center">
                    <span class="text-4xl mb-2">🎶</span>
                    <h4 class="font-bold">Evaluasi</h4>
                    <div class="text-sm text-pink-200">Album: Menari Dengan Bayangan</div>
                    <div class="text-xs text-gray-300 mb-2">2019</div>
                </div>
                <div class="music-card p-4 flex flex-col items-center">
                    <span class="text-4xl mb-2">🎶</span>
                    <h4 class="font-bold">Rumah ke Rumah</h4>
                    <div class="text-sm text-pink-200">Album: Menari Dengan Bayangan</div>
                    <div class="text-xs text-gray-300 mb-2">2019</div>
                </div>
                <div class="music-card p-4 flex flex-col items-center">
                    <span class="text-4xl mb-2">🎶</span>
                    <h4 class="font-bold">Belum Tidur</h4>
                    <div class="text-sm text-pink-200">Album: Menari Dengan Bayangan</div>
                    <div class="text-xs text-gray-300 mb-2">2019</div>
                </div>
                <div class="music-card p-4 flex flex-col items-center">
                    <span class="text-4xl mb-2">🎶</span>
                    <h4 class="font-bold">Dehidrasi</h4>
                    <div class="text-sm text-pink-200">Album: Menari Dengan Bayangan</div>
                    <div class="text-xs text-gray-300 mb-2">2019</div>
                </div>
                <div class="music-card p-4 flex flex-col items-center">
                    <span class="text-4xl mb-2">🎶</span>     
                    <h4 class="font-bold">Kita ke Sana</h4>
                    <div class="text-sm text-pink-200">Album: Lagipula Hidup Akan Berakhir</div>
                    <div class="text-xs text-gray-300 mb-2">2023</div>
                </div>
            </div>
        </div>
    </div>

    <footer class="music-theme text-center py-4 mt-5 rounded-t-3xl shadow-lg">
        <p class="mb-0">&copy; 2025 MyMusic, Kelompok 7. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>