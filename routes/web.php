<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Dimas Hidayatulloh']);
});

// Buat 2 rute baru
Route::get('/blog', function () {
    $articles = [
        ['judul' => 'Kecerdasan Buatan', 'isi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit, nisi maiores placeat blanditiis quod quia deleniti amet consequuntur similique incidunt! Cum quo, libero aperiam eligendi vero iste possimus aut voluptatibus.'],
        ['judul' => 'Pembelajaran Mesin', 'isi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras venenatis euismod malesuada.']
    ];
    return view('blog', compact('articles'));
});

Route::get('/contact', function () {
    return view('contact', ['email' => 'dimas.223040020@mail.unpas.ac.id', 'instagram' => 'dimas.frando']);
});
