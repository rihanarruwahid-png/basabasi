<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reservasi - Basabasi Coffee</title>

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

/* ================= RESERVASI ================= */

.reservasi{
    min-height:100vh;
    padding:150px 8% 100px;
    display:flex;
    justify-content:center;
    align-items:center;
}

.reservasi-box{
    width:700px;
    background:#1c1c1c;
    padding:50px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 10px 30px rgba(0,0,0,.4);
}

.section-header small{
    color:#f5a623;
    letter-spacing:4px;
}

.section-header h2{
    margin-top:10px;
    font-size:42px;
}

.reservasi-box p{
    margin:25px 0;
    color:#ccc;
    line-height:1.8;
}

.btn{
    display:inline-block;
    padding:15px 35px;
    background:#f5a623;
    color:#111;
    text-decoration:none;
    border-radius:10px;
    font-weight:700;
    transition:.3s;
}

.btn:hover{
    background:#fff;
}

.info{
    margin-top:40px;
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:20px;
}

.card{
    background:#222;
    padding:20px;
    border-radius:15px;
}

.card h4{
    color:#f5a623;
    margin-bottom:10px;
}

.card p{
    color:#ddd;
}

@media(max-width:768px){

header{
    padding:20px;
}

nav ul{
    gap:18px;
}

.info{
    grid-template-columns:1fr;
}

.reservasi-box{
    width:100%;
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

<section class="reservasi">

<div class="reservasi-box">

<div class="section-header">

<small>RESERVASI</small>

<h2>Pesan Tempat Anda</h2>

</div>

<p>
Nikmati suasana nyaman Basabasi Coffee bersama keluarga, teman,
atau pasangan. Lakukan reservasi sekarang agar tempat Anda tersedia.
</p>

<a href="https://wa.me/6281234567890" class="btn">
Reservasi via WhatsApp
</a>

<div class="info">

<div class="card">

<h4>🕒 Jam Operasional</h4>

<p>08.00 - 23.00 WIB</p>

</div>

<div class="card">

<h4>📍 Lokasi</h4>

<p>Jl. Sukoharjo No.1i, Sanggrahan, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>

</div>

</div>

</div>

</section>

</body>
</html>