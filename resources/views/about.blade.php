<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Tentang Pengembang</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">MyMusic</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/musik">Musik</a></li>
                    <li class="nav-item"><a class="nav-link" href="/band">Band</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <h1>Profil Pengembang</h1>
    <ul>
        @foreach($developers as $dev)
        <li>{{ $dev['nama'] }}</li>
        @endforeach
    </ul>

    <h2>Profil Band Hindia</h2>
    <table border="1" cellpadding="8" style="margin-bottom:20px;">
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

    <h2>Daftar Lagu Populer</h2>
    <table border="1" cellpadding="8" style="margin-bottom:20px;">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Artis</th>
                <th>Genre</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
            @foreach($musik as $m)
            <tr>
                <td>{{ $m['judul'] }}</td>
                <td>{{ $m['artis'] }}</td>
                <td>{{ $m['genre'] }}</td>
                <td>{{ $m['tahun'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/musik">Lihat Halaman Musik</a> | <a href="/band">Lihat Halaman Band</a> | <a href="/">Kembali ke Beranda</a>
</body>
</html>
