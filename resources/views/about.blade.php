<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <title>Tentang Pengembang</title>
    <style>
        body {
            background: linear-gradient(135deg, #232526 0%, #414345 100%);
            min-height: 100vh;
        }
        .music-theme {
            background: linear-gradient(135deg, #ff512f 0%, #dd2476 100%);
            color: #fff;
        }
        .dev-card {
            background: #232526;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.2);
            color: #fff;
            transition: transform 0.2s;
        }
        .dev-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 32px #dd2476aa;
        }
        .dev-photo {
            width: 110px;
            height: 110px;
            object-fit: cover;
            border-radius: 9999px;
            border: 3px solid #ffb6d5;
            margin-bottom: 1rem;
            background: #fff;
            box-shadow: 0 2px 12px #0002;
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
            <li class="nav-item"><a class="nav-link active" href="/about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="/musik">Musik</a></li>
            <li class="nav-item"><a class="nav-link" href="/band">Band</a></li>
        </ul>
    </nav>

    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="text-3xl font-bold text-white drop-shadow-lg">Profil Pengembang</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="dev-card p-4 text-center">
                    <img src="{{ asset('img/IMG_4868.jpg') }}" alt="Foto Pengembang 1" class="dev-photo mx-auto">
                    <h4 class="font-bold">Muhammad Nabil</h4>
                    <div class="text-pink-200">Web Developer</div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="dev-card p-4 text-center">
                   <img src="{{ asset('img/WhatsApp Image 2025-09-15 at 11.21.45.jpeg') }}" alt="Foto Pengembang 1" class="dev-photo mx-auto">
                    <h4 class="font-bold">Muhammad Hafizh Dwinanda</h4>
                    <div class="text-pink-200">Web Developer</div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="dev-card p-4 text-center">
                    <img src="{{ asset('img/WhatsApp Image 2025-09-15 at 11.21.05.jpeg') }}" alt="Foto Pengembang 1" class="dev-photo mx-auto">
                    <h4 class="font-bold">Maria Meryana Christy</h4>
                    <div class="text-pink-200">Web Developer</div>
                </div>
            </div>
        </div>
    <footer class="music-theme text-center py-4 mt-5 rounded-t-3xl shadow-lg">
        <p class="mb-0">&copy; 2025 MyMusic, Kelompok 7. All rights reserved.</p>
    </footer>
</body>
</html>
