<?php

// Home admin
Breadcrumbs::for('admin', function ($trail) {
    $trail->push('Beranda', route('admin'));
});

// home penulis
Breadcrumbs::for('autor.index', function ($trail) {
    $trail->push('Beranda', route('admin'));
    $trail->push('penulis', route('autor.index'));
});

// tambah pebulis
Breadcrumbs::for('autor.buat', function ($trail) {
    $trail->push('Beranda', route('admin'));
    $trail->push('penulis', route('autor.index'));
    $trail->push('Tambah Penulis', route('autor.buat'));
});

//edit penulis
Breadcrumbs::for('autor.edit', function ($trail, $autor) {
    $trail->push('Beranda', route('admin'));
    $trail->push('penulis', route('autor.index'));
    $trail->push('Edit Penulis', route('autor.edit', $autor));
});

// Home BUku
Breadcrumbs::for('buku.index', function ($trail) {
    $trail->push('Beranda', route('admin'));
    $trail->push('Buku', route('buku.index'));
});

//buat buku
Breadcrumbs::for('buku.buat', function ($trail) {
    $trail->push('Beranda', route('admin'));
    $trail->push('Buku', route('buku.index'));
    $trail->push('Tambah', route('buku.buat'));
});

//edit buku
Breadcrumbs::for('buku.edit', function ($trail , $book) {
    $trail->push('Beranda', route('admin'));
    $trail->push('Buku', route('buku.index'));
    $trail->push('Edit', route('buku.edit', $book));
});

// Home pinjam
Breadcrumbs::for('borrow.index', function ($trail) {
    $trail->push('Beranda', route('admin'));
    $trail->push('Pinjam', route('borrow.index'));
});