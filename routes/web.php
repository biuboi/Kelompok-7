<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/musik', function () {
    $musik = [
        [
            'judul' => 'Secukupnya',
            'artis' => 'Hindia',
            'genre' => 'Indie, Pop',
            'tahun' => 2019,
        ],
        [
            'judul' => 'Evaluasi',
            'artis' => 'Hindia',
            'genre' => 'Indie, Pop',
            'tahun' => 2019,
        ],
        [
            'judul' => 'Rumah ke Rumah',
            'artis' => 'Hindia',
            'genre' => 'Indie, Pop',
            'tahun' => 2019,
        ],
        [
            'judul' => 'Belum Tidur',
            'artis' => 'Hindia',
            'genre' => 'Indie, Pop',
            'tahun' => 2019,
        ],
        [
            'judul' => 'Dehidrasi',
            'artis' => 'Hindia',
            'genre' => 'Indie, Pop',
            'tahun' => 2019,
        ],
    ];
    $bands = [
        [
            'nama' => 'Hindia',
            'asal' => 'Indonesia',
            'genre' => 'Indie, Pop, Elektronik',
            'tahun' => '2018 - sekarang',
        ],
    ];
    return view('musik', compact('musik', 'bands'));
});

Route::get('/band', function () {
    $bands = [
        [
            'nama' => 'Hindia',
            'asal' => 'Indonesia',
            'genre' => 'Indie, Pop, Elektronik',
            'tahun' => '2018 - sekarang',
        ],
    ];
    $musik = [
        [
            'judul' => 'Secukupnya',
            'artis' => 'Hindia',
            'genre' => 'Indie, Pop',
            'tahun' => 2019,
        ],
        [
            'judul' => 'Evaluasi',
            'artis' => 'Hindia',
            'genre' => 'Indie, Pop',
            'tahun' => 2019,
        ],
        [
            'judul' => 'Rumah ke Rumah',
            'artis' => 'Hindia',
            'genre' => 'Indie, Pop',
            'tahun' => 2019,
        ],
        [
            'judul' => 'Belum Tidur',
            'artis' => 'Hindia',
            'genre' => 'Indie, Pop',
            'tahun' => 2019,
        ],
        [
            'judul' => 'Dehidrasi',
            'artis' => 'Hindia',
            'genre' => 'Indie, Pop',
            'tahun' => 2019,
        ],
    ];
    return view('band', compact('bands', 'musik'));
});

Route::get('/about', function () {
    $bands = [
        [
            'nama' => 'Hindia',
            'asal' => 'Indonesia',
            'genre' => 'Indie, Pop, Elektronik',
            'tahun' => '2018 - sekarang',
        ],
    ];
    $musik = [
        [
            'judul' => 'Secukupnya',
            'artis' => 'Hindia',
            'genre' => 'Indie, Pop',
            'tahun' => 2019,
        ],
        [
            'judul' => 'Evaluasi',
            'artis' => 'Hindia',
            'genre' => 'Indie, Pop',
            'tahun' => 2019,
        ],
        [
            'judul' => 'Rumah ke Rumah',
            'artis' => 'Hindia',
            'genre' => 'Indie, Pop',
            'tahun' => 2019,
        ],
        [
            'judul' => 'Belum Tidur',
            'artis' => 'Hindia',
            'genre' => 'Indie, Pop',
            'tahun' => 2019,
        ],
        [
            'judul' => 'Dehidrasi',
            'artis' => 'Hindia',
            'genre' => 'Indie, Pop',
            'tahun' => 2019,
        ],
    ];
    $developers = [
        ['nama' => 'A'],
        ['nama' => 'B'],
    ];
    return view('about', compact('bands', 'musik', 'developers'));
});
