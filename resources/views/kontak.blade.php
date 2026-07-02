<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Basabasi Coffee</title>

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

/* Navbar */

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
    z-index:1000;
}

.logo{
    color:#f5a623;
    text-decoration:none;
    font-size:34px;
    font-weight:800;
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

/* Kontak */

.kontak{
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

.kontak-content{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:30px;
}

.kontak-item{
    background:#1b1b1b;
    padding:40px;
    border-radius:20px;
    text-align:center;
    transition:.3s;
}

.kontak-item:hover{
    transform:translateY(-10px);
}

.kontak-item h4{
    color:#f5a623;
    font-size:24px;
    margin-bottom:20px;
}

.kontak-item p{
    color:#ddd;
    font-size:18px;
}

@media(max-width:768px){

header{
    padding:20px;
}

nav ul{
    gap:20px;
}

.kontak-content{
    grid-template-columns:1fr;
}

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

<section class="kontak">

<div class="section-header">
    <small>KONTAK</small>
    <h2>Hubungi Kami</h2>
</div>

<div class="kontak-content">

<div class="kontak-item">
<h4>📞 Telepon</h4>
<p>0812-3456-7890</p>
</div>

<div class="kontak-item">
<h4>✉️ Email</h4>
<p>hello@basabasi.co.id</p>
</div>

<div class="kontak-item">
<h4>📍 Alamat</h4>
<p>Jl. Sukoharjo No.1i, Sanggrahan, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
</div>

</div>

</section>

</body>
</html>