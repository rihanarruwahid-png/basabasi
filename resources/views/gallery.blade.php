<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gallery Basabasi</title>

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

/* ===== NAVBAR ===== */

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
    font-size:34px;
    font-weight:800;
    letter-spacing:3px;
}

nav ul{
    display:flex;
    list-style:none;
    gap:40px;
}

nav ul li a{
    color:white;
    text-decoration:none;
    font-weight:600;
    transition:.3s;
}

nav ul li a:hover{
    color:#f5a623;
}

/* ===== GALLERY ===== */

.gallery{
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
    font-size:48px;
    margin-top:10px;
}

.gallery-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:25px;
}

.gallery-item{
    overflow:hidden;
    border-radius:20px;
    cursor:pointer;
    box-shadow:0 8px 25px rgba(0,0,0,.4);
}

.gallery-item img{
    width:100%;
    height:280px;
    object-fit:cover;
    transition:.5s;
}

.gallery-item:hover img{
    transform:scale(1.1);
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

<section class="gallery">

<div class="section-header">
<small>OUR GALLERY</small>
<h2>Galeri Basabasi</h2>
</div>

<div class="gallery-grid">

<div class="gallery-item">
<img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?w=800">
</div>

<div class="gallery-item">
<img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=800">
</div>

<div class="gallery-item">
<img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?w=800">
</div>

<div class="gallery-item">
<img src="https://images.unsplash.com/photo-1559925393-8be0ec4767c8?w=800">
</div>

<div class="gallery-item">
<img src="https://images.unsplash.com/photo-1445116572660-236099ec97a0?w=800">
</div>

<div class="gallery-item">
<img src="https://images.unsplash.com/photo-1521017432531-fbd92d768814?w=800">
</div>

<div class="gallery-item">
<img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=800">
</div>

<div class="gallery-item">
<img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?w=800">
</div>

</div>

</section>

</body>
</html>