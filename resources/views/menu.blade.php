<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu Basabasi Coffee</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#111;
    color:#fff;
}

/* ================= NAVBAR ================= */

header{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    padding:20px 80px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:#111;
    border-bottom:1px solid rgba(245,166,35,.2);
    z-index:999;
}

.logo{
    color:#f5a623;
    text-decoration:none;
    font-size:35px;
    font-weight:800;
    letter-spacing:3px;
}

nav ul{
    display:flex;
    list-style:none;
    gap:40px;
}

nav ul li a{
    color:#fff;
    text-decoration:none;
    font-weight:600;
    transition:.3s;
}

nav ul li a:hover{
    color:#f5a623;
}

/* ================= MENU ================= */

.menu{
    padding:150px 8% 100px;
}

.section-header{
    text-align:center;
    margin-bottom:60px;
}

.section-header small{
    color:#f5a623;
    letter-spacing:4px;
}

.section-header h2{
    font-size:45px;
    margin-top:10px;
}

.menu-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
    gap:30px;
}

.menu-card{
    background:#1d1d1d;
    border-radius:20px;
    overflow:hidden;
    transition:.3s;
}

.menu-card:hover{
    transform:translateY(-10px);
}

.menu-card img{
    width:100%;
    height:250px;
    object-fit:cover;
}

.menu-info{
    padding:25px;
}

.menu-info h3{
    margin-bottom:15px;
    color:#fff;
}

.menu-info p{
    color:#ccc;
    line-height:1.7;
}

.price{
    margin-top:20px;
    color:#f5a623;
    font-size:22px;
    font-weight:bold;
}

</style>

</head>
<body>

<header>

<a href="{{ route('home') }}" class="logo">BASABASI</a>

<nav>

<ul>

<li><a href="{{ route('home') }}">Home</a></li>

<li><a href="{{ route('menu') }}">Menu</a></li>

<li><a href="{{ route('reservasi') }}">Reservasi</a></li>

<li><a href="{{ route('gallery') }}">Gallery</a></li>

<li><a href="{{ route('kontak') }}">Kontak</a></li>

</ul>

</nav>

</header>

<section class="menu">

<div class="section-header">
<small>OUR MENU</small>
<h2>Menu Favorit</h2>
</div>

<div class="menu-grid">

@if($menus->count() > 0)
@php
    $fallbackImages = [
        'Coffee' => 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=600',
        'Non Coffee' => 'https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=600',
        'Food' => 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=600',
        'Dessert' => 'https://images.unsplash.com/photo-1551024601-bec78aea704b?w=600',
    ];
@endphp

@foreach($menus as $item)
<div class="menu-card">
@if($item->gambar)
    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_menu }}">
@else
    <img src="{{ $fallbackImages[$item->kategori] ?? 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=600' }}" alt="{{ $item->nama_menu }}">
@endif
<div class="menu-info">
<h3>{{ $item->nama_menu }}</h3>
<p>{{ $item->deskripsi }}</p>
<div class="price">Rp {{ number_format($item->harga, 0, ',', '.') }}</div>
</div>
</div>
@endforeach

@else
<p style="text-align:center;color:#888;grid-column:1/-1;padding:60px 0;">Menu belum tersedia.</p>
@endif

</div>

</section>

</body>
</html>