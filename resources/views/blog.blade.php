<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Blog</title>
</head>
<body>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/blog">Blog</a>
    <a href="/contact">Contact</a>
    <h1>Halaman Blog</h1>

    @foreach ($articles as $item)
        <article>
            <h3>{{ $item['judul']; }}</h3>
            <p>{{ $item['isi']; }}</p>
        </article>
    @endforeach

</body>
</html>