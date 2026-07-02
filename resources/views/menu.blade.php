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

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=600">
<div class="menu-info">
<h3>Cafe Latte</h3>
<p>Espresso dipadukan dengan susu segar pilihan menghasilkan rasa yang lembut dan creamy.</p>
<div class="price">Rp 25.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1517701604599-bb29b565090c?w=600">
<div class="menu-info">
<h3>Matcha Latte</h3>
<p>Matcha premium dengan rasa manis yang pas dan aroma khas Jepang.</p>
<div class="price">Rp 30.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?w=600">
<div class="menu-info">
<h3>Cheesecake</h3>
<p>Dessert favorit dengan tekstur lembut yang cocok menemani kopi.</p>
<div class="price">Rp 28.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1572442388796-11668a67e53d?w=600">
<div class="menu-info">
<h3>Cappuccino</h3>
<p>Perpaduan sempurna espresso, steamed milk, dan foam dengan taburan cokelat.</p>
<div class="price">Rp 27.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=600">
<div class="menu-info">
<h3>Espresso</h3>
<p>Kopi hitam pekat dengan rasa bold dan aroma yang kuat untuk pencinta kopi sejati.</p>
<div class="price">Rp 20.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1551030173-122abc85f8f1?w=600">
<div class="menu-info">
<h3>Americano</h3>
<p>Espresso dengan tambahan air panas, rasa yang ringan namun tetap nikmat.</p>
<div class="price">Rp 23.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735?w=600">
<div class="menu-info">
<h3>Cold Brew</h3>
<p>Kopi dingin yang diseduh selama 12 jam untuk rasa yang smooth dan tidak pahit.</p>
<div class="price">Rp 30.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1578314675249-a6910f80cc4e?w=600">
<div class="menu-info">
<h3>Mocha</h3>
<p>Perpaduan espresso, cokelat premium, dan susu yang creamy dan manis.</p>
<div class="price">Rp 32.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1579992357174-eb4a18f092b6?w=600">
<div class="menu-info">
<h3>Caramel Macchiato</h3>
<p>Espresso dengan susu vanilla dan sirup karamel yang manis.</p>
<div class="price">Rp 33.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1595981267035-7b04ca84a82d?w=600">
<div class="menu-info">
<h3>Hazelnut Latte</h3>
<p>Latte dengan sirup hazelnut yang memberikan rasa kacang yang khas.</p>
<div class="price">Rp 30.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=600">
<div class="menu-info">
<h3>Chocolate Hot</h3>
<p>Cokelat Belgia premium yang leleh dengan susu hangat dan marshmallow.</p>
<div class="price">Rp 28.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1544787219-7f47ccb76574?w=600">
<div class="menu-info">
<h3>Lemon Tea</h3>
<p>Teh hitam segar dengan perasan lemon yang menyegarkan.</p>
<div class="price">Rp 22.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1558961363-fa8fdf82db35?w=600">
<div class="menu-info">
<h3>Chocolate Chip Cookies</h3>
<p>Kue kering dengan chocolate chips yang melimpah dan renyah.</p>
<div class="price">Rp 20.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?w=600">
<div class="menu-info">
<h3>Croissant</h3>
<p>Roti croissant buttery yang renyah di luar dan lembut di dalam.</p>
<div class="price">Rp 25.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1569864358642-9d16840c0232?w=600">
<div class="menu-info">
<h3>Tiramisu</h3>
<p>Dessert klasik Italia dengan lapisan kopi dan mascarpone yang lembut.</p>
<div class="price">Rp 35.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1551024601-bec78aea704b?w=600">
<div class="menu-info">
<h3>Donat Cokelat</h3>
<p>Donat lembut dengan glaze cokelat yang menggiurkan.</p>
<div class="price">Rp 18.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1482049016688-2d3e1b311543?w=600">
<div class="menu-info">
<h3>Avocado Toast</h3>
<p>Roti panggang dengan alpukat segar, telur, dan seasoning spesial.</p>
<div class="price">Rp 38.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1528735602780-2552fd46c7af?w=600">
<div class="menu-info">
<h3>Pancake Stack</h3>
<p>Tumpukan pancake fluffy dengan maple syrup dan butter.</p>
<div class="price">Rp 35.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1555992336-03a23c7b20ee?w=600">
<div class="menu-info">
<h3>Chicken Sandwich</h3>
<p>Roti gandum dengan ayam panggang, sayuran segar, dan saus spesial.</p>
<div class="price">Rp 40.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=600">
<div class="menu-info">
<h3>French Fries</h3>
<p>Kentang goreng renyah dengan bumbu spesial dan saus pilihan.</p>
<div class="price">Rp 25.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1551782450-a2132b4ba21d?w=600">
<div class="menu-info">
<h3>Beef Burger</h3>
<p>Burger daging sapi premium dengan keju, sayuran, dan saus rahasia.</p>
<div class="price">Rp 45.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1534939561126-855b8675edd7?w=600">
<div class="menu-info">
<h3>Caesar Salad</h3>
<p>Selada romaine dengan dressing caesar, crouton, dan parmesan.</p>
<div class="price">Rp 35.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1572442388796-11668a67e53d?w=600">
<div class="menu-info">
<h3>Pasta Carbonara</h3>
<p>Pasta dengan saus creamy, bacon, dan parmesan cheese.</p>
<div class="price">Rp 45.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1563805042-7684c019e1cb?w=600">
<div class="menu-info">
<h3>Ice Cream Sundae</h3>
<p>Es krim vanilla dengan topping cokelat, kacang, dan cherry.</p>
<div class="price">Rp 30.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?w=600">
<div class="menu-info">
<h3>Fruit Smoothie</h3>
<p>Smoothie buah segar dengan campuran yogurt dan madu.</p>
<div class="price">Rp 28.000</div>
</div>
</div>

<div class="menu-card">
<img src="https://images.unsplash.com/photo-1544145945-f90425340c7e?w=600">
<div class="menu-info">
<h3>Brownies</h3>
<p>Brownies cokelat padat dengan tekstur fudgy yang sempurna.</p>
<div class="price">Rp 25.000</div>
</div>
</div>

</div>

</section>

</body>
</html>