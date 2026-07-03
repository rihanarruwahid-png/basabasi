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
}

.section-header{
    text-align:center;
    margin-bottom:50px;
}

.section-header small{
    color:#f5a623;
    letter-spacing:4px;
}

.section-header h2{
    margin-top:10px;
    font-size:42px;
}

.reservasi-container{
    max-width:1000px;
    margin:0 auto;
}

/* ================= FORM ================= */

.form-section{
    background:#1c1c1c;
    padding:40px;
    border-radius:20px;
    margin-bottom:30px;
    box-shadow:0 10px 30px rgba(0,0,0,.4);
}

.form-section h3{
    color:#f5a623;
    margin-bottom:25px;
    font-size:20px;
    display:flex;
    align-items:center;
    gap:10px;
}

.form-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:20px;
}

.form-group{
    display:flex;
    flex-direction:column;
}

.form-group.full-width{
    grid-column:1/-1;
}

.form-group label{
    color:#ccc;
    font-size:14px;
    margin-bottom:8px;
    font-weight:500;
}

.form-group input,
.form-group select,
.form-group textarea{
    background:#2a2a2a;
    border:1px solid #333;
    color:#fff;
    padding:14px 16px;
    border-radius:10px;
    font-size:15px;
    font-family:'Poppins',sans-serif;
    transition:.3s;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus{
    outline:none;
    border-color:#f5a623;
}

.form-group textarea{
    resize:vertical;
    min-height:80px;
}

/* ================= MENU SELECTION ================= */

.menu-categories{
    display:flex;
    gap:10px;
    margin-bottom:25px;
    flex-wrap:wrap;
}

.cat-btn{
    padding:8px 20px;
    background:#2a2a2a;
    border:1px solid #333;
    color:#ccc;
    border-radius:25px;
    cursor:pointer;
    font-family:'Poppins',sans-serif;
    font-size:13px;
    font-weight:500;
    transition:.3s;
}

.cat-btn:hover,
.cat-btn.active{
    background:#f5a623;
    color:#111;
    border-color:#f5a623;
}

.menu-selection-grid{
    display:grid;
    grid-template-columns:repeat(auto-fill,minmax(280px,1fr));
    gap:15px;
    max-height:500px;
    overflow-y:auto;
    padding-right:10px;
}

.menu-selection-grid::-webkit-scrollbar{
    width:6px;
}

.menu-selection-grid::-webkit-scrollbar-track{
    background:#2a2a2a;
    border-radius:3px;
}

.menu-selection-grid::-webkit-scrollbar-thumb{
    background:#f5a623;
    border-radius:3px;
}

.menu-item{
    background:#2a2a2a;
    border:2px solid #333;
    border-radius:15px;
    padding:18px;
    cursor:pointer;
    transition:.3s;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.menu-item:hover{
    border-color:#f5a623;
}

.menu-item.selected{
    border-color:#f5a623;
    background:rgba(245,166,35,.1);
}

.menu-item-info h4{
    font-size:15px;
    margin-bottom:4px;
}

.menu-item-info .item-price{
    color:#f5a623;
    font-size:14px;
    font-weight:600;
}

.menu-item-info .item-desc{
    color:#888;
    font-size:12px;
    margin-top:4px;
}

.menu-item-right{
    display:flex;
    align-items:center;
    gap:10px;
}

.check-circle{
    width:28px;
    height:28px;
    border-radius:50%;
    border:2px solid #555;
    display:flex;
    align-items:center;
    justify-content:center;
    transition:.3s;
    font-size:14px;
}

.menu-item.selected .check-circle{
    background:#f5a623;
    border-color:#f5a623;
    color:#111;
}

.qty-control{
    display:none;
    align-items:center;
    gap:8px;
}

.menu-item.selected .qty-control{
    display:flex;
}

.qty-btn{
    width:28px;
    height:28px;
    border-radius:50%;
    background:#f5a623;
    color:#111;
    border:none;
    font-size:16px;
    font-weight:700;
    cursor:pointer;
    display:flex;
    align-items:center;
    justify-content:center;
    transition:.2s;
}

.qty-btn:hover{
    background:#fff;
}

.qty-value{
    font-size:15px;
    font-weight:600;
    min-width:20px;
    text-align:center;
}

/* ================= SELECTED SUMMARY ================= */

.summary-section{
    background:#1c1c1c;
    padding:40px;
    border-radius:20px;
    margin-bottom:30px;
    box-shadow:0 10px 30px rgba(0,0,0,.4);
}

.summary-section h3{
    color:#f5a623;
    margin-bottom:20px;
    font-size:20px;
    display:flex;
    align-items:center;
    gap:10px;
}

.summary-list{
    display:flex;
    flex-direction:column;
    gap:10px;
}

.summary-empty{
    color:#666;
    text-align:center;
    padding:20px;
    font-style:italic;
}

.summary-item{
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:#2a2a2a;
    padding:12px 18px;
    border-radius:10px;
}

.summary-item-info{
    display:flex;
    align-items:center;
    gap:12px;
}

.summary-item-qty{
    background:#f5a623;
    color:#111;
    width:28px;
    height:28px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:13px;
    font-weight:700;
}

.summary-item-name{
    font-weight:500;
}

.summary-item-price{
    color:#f5a623;
    font-weight:600;
}

.summary-total{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-top:20px;
    padding-top:20px;
    border-top:1px solid #333;
    font-size:18px;
    font-weight:700;
}

.summary-total .total-price{
    color:#f5a623;
    font-size:22px;
}

/* ================= SUBMIT ================= */

.submit-section{
    text-align:center;
}

.btn-wa{
    display:inline-flex;
    align-items:center;
    gap:12px;
    padding:18px 50px;
    background:#25D366;
    color:#fff;
    text-decoration:none;
    border-radius:15px;
    font-weight:700;
    font-size:18px;
    transition:.3s;
    border:none;
    cursor:pointer;
    font-family:'Poppins',sans-serif;
}

.btn-wa:hover{
    background:#128C7E;
    transform:translateY(-3px);
    box-shadow:0 10px 30px rgba(37,211,102,.3);
}

.btn-wa:disabled{
    background:#333;
    color:#666;
    cursor:not-allowed;
    transform:none;
    box-shadow:none;
}

.btn-wa svg{
    width:24px;
    height:24px;
}

.info-cards{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:20px;
    margin-top:40px;
}

.info-card{
    background:#1c1c1c;
    padding:25px;
    border-radius:15px;
    text-align:center;
}

.info-card h4{
    color:#f5a623;
    margin-bottom:10px;
}

.info-card p{
    color:#ddd;
    font-size:14px;
}

@media(max-width:768px){

header{
    padding:20px;
}

nav ul{
    gap:18px;
}

.form-grid{
    grid-template-columns:1fr;
}

.info-cards{
    grid-template-columns:1fr;
}

.menu-selection-grid{
    grid-template-columns:1fr;
}

.reservasi{
    padding:120px 5% 80px;
}

.form-section,
.summary-section{
    padding:25px;
}

.section-header h2{
    font-size:32px;
}

.btn-wa{
    padding:15px 30px;
    font-size:16px;
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

<div class="reservasi-container">

<div class="section-header">
<small>RESERVASI</small>
<h2>Pesan Tempat & Menu Anda</h2>
</div>

<form id="reservasiForm">

<!-- Data Diri -->
<div class="form-section">
<h3>📋 Data Reservasi</h3>
<div class="form-grid">
    <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" placeholder="Masukkan nama Anda" required>
    </div>
    <div class="form-group">
        <label for="telepon">Nomor WhatsApp</label>
        <input type="tel" id="telepon" placeholder="08xxxxxxxxxx" required>
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal Reservasi</label>
        <input type="date" id="tanggal" required>
    </div>
    <div class="form-group">
        <label for="waktu">Waktu Kedatangan</label>
        <input type="time" id="waktu" required>
    </div>
    <div class="form-group">
        <label for="jumlah">Jumlah Tamu</label>
        <select id="jumlah" required>
            <option value="">Pilih jumlah tamu</option>
            <option value="1">1 Orang</option>
            <option value="2">2 Orang</option>
            <option value="3">3 Orang</option>
            <option value="4">4 Orang</option>
            <option value="5">5 Orang</option>
            <option value="6">6 Orang</option>
            <option value="7-10">7-10 Orang</option>
            <option value="10+">Lebih dari 10 Orang</option>
        </select>
    </div>
    <div class="form-group">
        <label for="catatan">Catatan Khusus</label>
        <input type="text" id="catatan" placeholder="Contoh: area smoking, kursi tinggi, dll.">
    </div>
</div>
</div>

<!-- Pilih Menu -->
<div class="form-section">
<h3>☕ Pilih Menu</h3>

<div class="menu-categories">
    <button type="button" class="cat-btn active" data-cat="all">Semua</button>
    <button type="button" class="cat-btn" data-cat="coffee">Coffee</button>
    <button type="button" class="cat-btn" data-cat="non-coffee">Non Coffee</button>
    <button type="button" class="cat-btn" data-cat="food">Food</button>
    <button type="button" class="cat-btn" data-cat="dessert">Dessert</button>
</div>

<div class="menu-selection-grid" id="menuGrid">
</div>
</div>

<!-- Ringkasan -->
<div class="summary-section">
<h3>📝 Ringkasan Pesanan</h3>
<div class="summary-list" id="summaryList">
    <div class="summary-empty">Pilih menu dari daftar di atas</div>
</div>
<div class="summary-total" id="summaryTotal" style="display:none">
    <span>Total</span>
    <span class="total-price" id="totalPrice">Rp 0</span>
</div>
</div>

<!-- Submit -->
<div class="submit-section">
<button type="submit" class="btn-wa" id="btnWa">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor">
        <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
    </svg>
    Kirim Pesanan via WhatsApp
</button>
</div>

</form>

<!-- Info -->
<div class="info-cards">
    <div class="info-card">
        <h4>🕒 Jam Operasional</h4>
        <p>08.00 - 23.00 WIB</p>
    </div>
    <div class="info-card">
        <h4>📍 Lokasi</h4>
        <p>Jl. Sukoharjo No.1i, Sanggrahan, Condongcatur, Kec. Depok, Kabupaten Sleman, Yogyakarta</p>
    </div>
</div>

</div>

</section>

<script>
const menuData = {!! json_encode($menus->map(fn($m) => [
    'id' => $m->id,
    'name' => $m->nama_menu,
    'price' => $m->harga,
    'cat' => strtolower($m->kategori),
    'desc' => $m->deskripsi,
])) !!};

const selectedItems = {};

function renderMenu(cat = 'all') {
    const grid = document.getElementById('menuGrid');
    const filtered = cat === 'all' ? menuData : menuData.filter(m => m.cat === cat);

    grid.innerHTML = filtered.map(item => {
        const sel = selectedItems[item.id];
        return `
        <div class="menu-item ${sel ? 'selected' : ''}" data-id="${item.id}" onclick="toggleItem(${item.id})">
            <div class="menu-item-info">
                <h4>${item.name}</h4>
                <div class="item-price">Rp ${item.price.toLocaleString('id-ID')}</div>
                <div class="item-desc">${item.desc}</div>
            </div>
            <div class="menu-item-right">
                <div class="qty-control" onclick="event.stopPropagation()">
                    <button type="button" class="qty-btn" onclick="changeQty(${item.id}, -1)">−</button>
                    <span class="qty-value" id="qty-${item.id}">${sel ? sel.qty : 1}</span>
                    <button type="button" class="qty-btn" onclick="changeQty(${item.id}, 1)">+</button>
                </div>
                <div class="check-circle">${sel ? '✓' : ''}</div>
            </div>
        </div>`;
    }).join('');
}

function toggleItem(id) {
    if (selectedItems[id]) {
        delete selectedItems[id];
    } else {
        selectedItems[id] = { ...menuData.find(m => m.id === id), qty: 1 };
    }
    renderMenu(currentCat);
    renderSummary();
}

function changeQty(id, delta) {
    if (!selectedItems[id]) return;
    selectedItems[id].qty = Math.max(1, selectedItems[id].qty + delta);
    document.getElementById(`qty-${id}`).textContent = selectedItems[id].qty;
    renderSummary();
}

function renderSummary() {
    const list = document.getElementById('summaryList');
    const totalEl = document.getElementById('summaryTotal');
    const totalPriceEl = document.getElementById('totalPrice');
    const keys = Object.keys(selectedItems);

    if (keys.length === 0) {
        list.innerHTML = '<div class="summary-empty">Pilih menu dari daftar di atas</div>';
        totalEl.style.display = 'none';
        return;
    }

    let total = 0;
    list.innerHTML = keys.map(id => {
        const item = selectedItems[id];
        const subtotal = item.price * item.qty;
        total += subtotal;
        return `
        <div class="summary-item">
            <div class="summary-item-info">
                <span class="summary-item-qty">${item.qty}x</span>
                <span class="summary-item-name">${item.name}</span>
            </div>
            <span class="summary-item-price">Rp ${subtotal.toLocaleString('id-ID')}</span>
        </div>`;
    }).join('');

    totalEl.style.display = 'flex';
    totalPriceEl.textContent = `Rp ${total.toLocaleString('id-ID')}`;
}

let currentCat = 'all';

document.querySelectorAll('.cat-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.cat-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        currentCat = btn.dataset.cat;
        renderMenu(currentCat);
    });
});

const tanggalInput = document.getElementById('tanggal');
const today = new Date().toISOString().split('T')[0];
tanggalInput.setAttribute('min', today);

document.getElementById('reservasiForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const nama = document.getElementById('nama').value.trim();
    const telepon = document.getElementById('telepon').value.trim();
    const tanggal = document.getElementById('tanggal').value;
    const waktu = document.getElementById('waktu').value;
    const jumlah = document.getElementById('jumlah').value;
    const catatan = document.getElementById('catatan').value.trim();

    if (!nama || !telepon || !tanggal || !waktu || !jumlah) {
        alert('Mohon lengkapi data reservasi Anda.');
        return;
    }

    const tglFormatted = new Date(tanggal).toLocaleDateString('id-ID', {
        weekday: 'long', day: 'numeric', month: 'long', year: 'numeric'
    });

    let msg = `Halo Basabasi Coffee! Saya ingin reservasi:\n\n`;
    msg += `*Data Reservasi*\n`;
    msg += `Nama: ${nama}\n`;
    msg += `No. WhatsApp: ${telepon}\n`;
    msg += `Tanggal: ${tglFormatted}\n`;
    msg += `Waktu: ${waktu} WIB\n`;
    msg += `Jumlah Tamu: ${jumlah} orang\n`;
    if (catatan) msg += `Catatan: ${catatan}\n`;

    const keys = Object.keys(selectedItems);
    if (keys.length > 0) {
        let total = 0;
        msg += `\n*Pesanan Menu*\n`;
        keys.forEach(id => {
            const item = selectedItems[id];
            const subtotal = item.price * item.qty;
            total += subtotal;
            msg += `${item.qty}x ${item.name} - Rp ${subtotal.toLocaleString('id-ID')}\n`;
        });
        msg += `\n*Total: Rp ${total.toLocaleString('id-ID')}*\n`;
    }

    msg += `\nTerima kasih!`;

    const waNumber = '6281234567890';
    const waUrl = `https://wa.me/${waNumber}?text=${encodeURIComponent(msg)}`;
    window.open(waUrl, '_blank');
});

renderMenu();
</script>

</body>
</html>
