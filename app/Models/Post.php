<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] = $slug);
        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
