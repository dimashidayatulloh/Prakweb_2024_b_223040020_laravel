<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Dimas Hidayatulloh', 'title' => 'About']);
});

// Buat 2 rute baru
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Dimas Hidayatulloh',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate aliquid suscipit, minus iusto, tempore quidem laborum accusamus provident nam quisquam voluptas adipisci reiciendis quis, sit eius delectus. Voluptas, unde nihil.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Dimas Hidayatulloh',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate aliquid suscipit, minus iusto, tempore quidem laborum accusamus provident nam quisquam voluptas adipisci reiciendis quis, sit eius delectus. Voluptas, unde nihil.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Dimas Hidayatulloh',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate aliquid suscipit, minus iusto, tempore quidem laborum accusamus provident nam quisquam voluptas adipisci reiciendis quis, sit eius delectus. Voluptas, unde nihil.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Dimas Hidayatulloh',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate aliquid suscipit, minus iusto, tempore quidem laborum accusamus provident nam quisquam voluptas adipisci reiciendis quis, sit eius delectus. Voluptas, unde nihil.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
