<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basabasi Coffee</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

html{
    scroll-behavior:smooth;
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
    padding:22px 80px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:rgba(0,0,0,.75);
    backdrop-filter:blur(10px);
    border-bottom:1px solid rgba(245,166,35,.2);
    z-index:999;
}

.logo{
    color:#f5a623;
    text-decoration:none;
    font-size:36px;
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

/* ================= HERO ================= */

.hero{
    height:100vh;
    background:url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=1600') center/cover;
    display:flex;
    justify-content:center;
    align-items:center;
    position:relative;
}

.hero::before{
    content:'';
    position:absolute;
    inset:0;
    background:rgba(0,0,0,.6);
}

.hero-content{
    position:relative;
    text-align:center;
    z-index:2;
}

.hero-content h1{
    font-size:90px;
    line-height:1.1;
    font-weight:800;
}

.hero-content p{
    margin-top:20px;
    font-size:24px;
    color:#ddd;
    font-style:italic;
}

.scroll{
    position:absolute;
    bottom:40px;
    left:50%;
    transform:translateX(-50%);
    z-index:2;
    text-align:center;
}

.scroll span{
    display:block;
    letter-spacing:5px;
}

.scroll::after{
    content:"⌄";
    font-size:55px;
    display:block;
    animation:updown 1.5s infinite;
}

@keyframes updown{

0%,100%{
transform:translateY(0);
}

50%{
transform:translateY(10px);
}

}

/* ================= TENTANG KAMI ================= */

.about{
    padding:120px 8%;
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:60px;
    align-items:center;
    position:relative;
    overflow:hidden;
}

.about::before{
    content:'';
    position:absolute;
    top:-100px;
    right:-100px;
    width:300px;
    height:300px;
    background:radial-gradient(circle,rgba(245,166,35,.15),transparent 70%);
    border-radius:50%;
    z-index:0;
}

.about-image{
    position:relative;
    z-index:1;
}

.about-image img{
    width:100%;
    height:500px;
    object-fit:cover;
    border-radius:20px;
    box-shadow:0 20px 60px rgba(0,0,0,.5);
    transition:.5s;
}

.about-image img:hover{
    transform:scale(1.02);
}

.about-image::after{
    content:'';
    position:absolute;
    bottom:-20px;
    right:-20px;
    width:100%;
    height:100%;
    border:3px solid #f5a623;
    border-radius:20px;
    z-index:-1;
}

.about-text{
    position:relative;
    z-index:1;
}

.about-text small{
    color:#f5a623;
    letter-spacing:5px;
    font-weight:600;
}

.about-text h2{
    font-size:48px;
    margin:15px 0 25px;
    line-height:1.2;
}

.about-text h2 span{
    color:#f5a623;
}

.about-text p{
    color:#ccc;
    line-height:1.9;
    margin-bottom:20px;
    font-size:16px;
}

.about-features{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:25px;
    margin-top:35px;
}

.feature{
    display:flex;
    align-items:flex-start;
    gap:15px;
}

.feature-icon{
    width:50px;
    height:50px;
    min-width:50px;
    background:rgba(245,166,35,.15);
    border-radius:12px;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:24px;
    color:#f5a623;
}

.feature h4{
    font-size:18px;
    margin-bottom:5px;
}

.feature p{
    font-size:14px;
    color:#aaa;
    margin:0;
    line-height:1.5;
}

/* ================= RESPONSIVE ================= */

@media(max-width:992px){

.about{
    grid-template-columns:1fr;
    gap:50px;
    padding:100px 6%;
}

.about-image img{
    height:400px;
}

.about-text h2{
    font-size:36px;
}

}

@media(max-width:768px){

header{
padding:20px;
}

.logo{
font-size:28px;
}

nav ul{
gap:18px;
}

.hero-content h1{
font-size:48px;
}

.hero-content p{
font-size:18px;
}

.about-features{
    grid-template-columns:1fr;
}

.about-text h2{
    font-size:30px;
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

<section class="hero">

<div class="hero-content">

<h1>
TEMPAT KONGKOW <br>
& BERCERITA
</h1>

<p>
"Tuhan menciptakan aku dan kamu supaya menjadi kita"
</p>

</div>

<div class="scroll">
<span>SCROLL</span>
</div>

</section>

<!-- ================= TENTANG KAMI ================= -->

<section class="about" id="about">

<div class="about-image">
<img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?w=800" alt="Basabasi Coffee Interior">
</div>

<div class="about-text">

<small>TENTANG KAMI</small>

<h2>
Lebih dari Sekedar <span>Kopi</span>, <br>
Kami Menyajikan <span>Cerita</span>
</h2>

<p>
<strong>Basabasi Coffee</strong> lahir dari kecintaan sederhana terhadap secangkir kopi dan obrolan hangat bersama orang-orang terdekat. Nama "Basabasi" sendiri terinspirasi dari obrolan ringan yang menjadi pembuka cerita — tempat di setiap pertemuan bermula.
</p>

<p>
Kami percaya bahwa secangkir kopi bukan hanya tentang rasa, tetapi tentang momen. Momen untuk bersandar, tertawa, dan menciptakan kenangan. Setiap biji kopi yang kami sajikan dipilih langsung dari petani lokal terbaik Indonesia, diolah dengan penuh perhatian oleh barista berpengalaman, dan disajikan dengan cinta untuk menemani harimu.
</p>

<div class="about-features">

<div class="feature">
<div class="feature-icon">☕</div>
<div>
<h4>Kopi Pilihan</h4>
<p>Biji kopi arabika premium dari petani lokal Indonesia.</p>
</div>
</div>

<div class="feature">
<div class="feature-icon">🏡</div>
<div>
<h4>Suasana Nyaman</h4>
<p>Tempat hangat yang cocok untuk kongkow dan bekerja.</p>
</div>
</div>

<div class="feature">
<div class="feature-icon">🍰</div>
<div>
<h4>Menu Beragam</h4>
<p>Kopi, non-kopi, hingga makanan pendamping favorit.</p>
</div>
</div>

<div class="feature">
<div class="feature-icon">❤️</div>
<div>
<h4>Penuh Cinta</h4>
<p>Disajikan dengan sepenuh hati untuk setiap pelanggan.</p>
</div>
</div>

</div>

</div>

</section>

</body>
</html>