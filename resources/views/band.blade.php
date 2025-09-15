<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <title>Band</title>
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
            <li class="nav-item"><a class="nav-link active" href="/band">Band</a></li>
        </ul>
    </nav>

    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="text-3xl font-bold text-white drop-shadow-lg">Profil Band Hindia</h1>
        </div>
        <div class="bg-white bg-opacity-10 rounded-3xl shadow-lg p-4 mb-5">
            <table class="table table-dark table-striped rounded-2xl overflow-hidden">
                <thead>
                    <tr>
                        <th>Nama Band</th>
                        <th>Asal</th>
                        <th>Genre</th>
                        <th>Tahun Aktif</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bands as $b)
                    <tr>
                        <td>{{ $b['nama'] }}</td>
                        <td>{{ $b['asal'] }}</td>
                        <td>{{ $b['genre'] }}</td>
                        <td>{{ $b['tahun'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <h2 class="text-xl font-semibold text-pink-300 mb-3">Daftar Lagu Populer</h2>
        <div class="row justify-content-center">
            @foreach($musik as $m)
            <div class="col-md-4 mb-4">
                <div class="music-card p-4 text-center">
                    <span class="text-4xl mb-2 block">🎶</span>
                    <h4 class="font-bold">{{ $m['judul'] }}</h4>
                    <div class="text-pink-200">{{ $m['artis'] }}</div>
                    <div class="text-xs text-gray-300 mb-2">{{ $m['genre'] }} | {{ $m['tahun'] }}</div>
                    @if($m['judul'] == 'Secukupnya')
                    @elseif($m['judul'] == 'Evaluasi')
                    
                    @elseif($m['judul'] == 'Rumah ke Rumah')
                    
                    @elseif($m['judul'] == 'Belum Tidur')

                    @elseif($m['judul'] == 'Dehidrasi')
                   
                    @elseif($m['judul'] == 'Kita ke Sana')

                    @endif
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="/musik" class="btn btn-pink-500 bg-pink-500 text-white me-2">Lihat Halaman Musik</a>
            <a href="/about" class="btn btn-secondary me-2">Tentang Pengembang</a>
            <a href="/" class="btn btn-dark">Kembali ke Beranda</a>
        </div>
    </div>
    <footer class="music-theme text-center py-4 mt-5 rounded-t-3xl shadow-lg">
        <p class="mb-0">&copy; 2025 MyMusic, Kelompok 7. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
