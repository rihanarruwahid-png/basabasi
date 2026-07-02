<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Admin') - Basabasi Coffee</title>

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
    min-height:100vh;
}

/* ================= SIDEBAR ================= */

.sidebar{
    position:fixed;
    top:0;
    left:0;
    width:250px;
    height:100vh;
    background:#1a1a1a;
    border-right:1px solid rgba(245,166,35,.15);
    padding:30px 0;
    z-index:100;
    overflow-y:auto;
}

.sidebar-logo{
    text-align:center;
    padding:0 25px 30px;
    border-bottom:1px solid #2a2a2a;
}

.sidebar-logo a{
    color:#f5a623;
    text-decoration:none;
    font-size:28px;
    font-weight:800;
    letter-spacing:3px;
}

.sidebar-logo small{
    display:block;
    color:#666;
    font-size:11px;
    letter-spacing:2px;
    margin-top:4px;
}

.sidebar-nav{
    padding:20px 15px;
}

.sidebar-nav a{
    display:flex;
    align-items:center;
    gap:12px;
    padding:12px 15px;
    color:#aaa;
    text-decoration:none;
    border-radius:10px;
    font-size:14px;
    font-weight:500;
    transition:.2s;
    margin-bottom:4px;
}

.sidebar-nav a:hover{
    background:#2a2a2a;
    color:#fff;
}

.sidebar-nav a.active{
    background:rgba(245,166,35,.15);
    color:#f5a623;
}

.sidebar-nav a .icon{
    font-size:20px;
    width:24px;
    text-align:center;
}

.sidebar-divider{
    height:1px;
    background:#2a2a2a;
    margin:15px 0;
}

/* ================= MAIN ================= */

.main{
    margin-left:250px;
    min-height:100vh;
}

.topbar{
    position:sticky;
    top:0;
    background:#111;
    border-bottom:1px solid #2a2a2a;
    padding:18px 35px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    z-index:50;
}

.topbar h1{
    font-size:22px;
    font-weight:700;
}

.topbar-right{
    display:flex;
    align-items:center;
    gap:15px;
}

.btn-topbar{
    padding:8px 18px;
    border-radius:8px;
    text-decoration:none;
    font-size:13px;
    font-weight:600;
    transition:.2s;
    border:none;
    cursor:pointer;
    font-family:'Poppins',sans-serif;
}

.btn-primary{
    background:#f5a623;
    color:#111;
}

.btn-primary:hover{
    background:#e6991a;
}

.content{
    padding:30px 35px;
}

/* ================= ALERT ================= */

.alert{
    padding:14px 20px;
    border-radius:10px;
    margin-bottom:25px;
    font-size:14px;
    font-weight:500;
}

.alert-success{
    background:rgba(34,197,94,.15);
    color:#22c55e;
    border:1px solid rgba(34,197,94,.3);
}

.alert-error{
    background:rgba(239,68,68,.15);
    color:#ef4444;
    border:1px solid rgba(239,68,68,.3);
}

/* ================= TABLE ================= */

.table-wrapper{
    background:#1c1c1c;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 4px 20px rgba(0,0,0,.3);
}

.table-top{
    padding:20px 25px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:15px;
    flex-wrap:wrap;
}

.search-box{
    display:flex;
    gap:10px;
}

.search-box input,
.search-box select{
    background:#2a2a2a;
    border:1px solid #333;
    color:#fff;
    padding:10px 14px;
    border-radius:8px;
    font-size:13px;
    font-family:'Poppins',sans-serif;
}

.search-box input:focus,
.search-box select:focus{
    outline:none;
    border-color:#f5a623;
}

.search-box button{
    padding:10px 18px;
    background:#f5a623;
    color:#111;
    border:none;
    border-radius:8px;
    font-weight:600;
    font-size:13px;
    cursor:pointer;
    font-family:'Poppins',sans-serif;
    transition:.2s;
}

.search-box button:hover{
    background:#e6991a;
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#222;
    padding:14px 20px;
    text-align:left;
    font-size:12px;
    font-weight:600;
    color:#888;
    text-transform:uppercase;
    letter-spacing:1px;
}

td{
    padding:14px 20px;
    border-top:1px solid #2a2a2a;
    font-size:14px;
}

tr:hover td{
    background:#1f1f1f;
}

.menu-img{
    width:50px;
    height:50px;
    border-radius:8px;
    object-fit:cover;
    background:#2a2a2a;
}

.badge{
    display:inline-block;
    padding:4px 12px;
    border-radius:20px;
    font-size:11px;
    font-weight:600;
    background:rgba(245,166,35,.15);
    color:#f5a623;
}

.actions{
    display:flex;
    gap:8px;
}

.btn-sm{
    padding:6px 14px;
    border-radius:6px;
    font-size:12px;
    font-weight:600;
    text-decoration:none;
    transition:.2s;
    border:none;
    cursor:pointer;
    font-family:'Poppins',sans-serif;
}

.btn-edit{
    background:rgba(59,130,246,.15);
    color:#3b82f6;
}

.btn-edit:hover{
    background:rgba(59,130,246,.25);
}

.btn-delete{
    background:rgba(239,68,68,.15);
    color:#ef4444;
    border:none;
}

.btn-delete:hover{
    background:rgba(239,68,68,.25);
}

.btn-view{
    background:rgba(245,166,35,.15);
    color:#f5a623;
}

.btn-view:hover{
    background:rgba(245,166,35,.25);
}

/* ================= FORM ================= */

.form-card{
    background:#1c1c1c;
    border-radius:15px;
    padding:35px;
    box-shadow:0 4px 20px rgba(0,0,0,.3);
    max-width:700px;
}

.form-group{
    margin-bottom:22px;
}

.form-group label{
    display:block;
    color:#ccc;
    font-size:13px;
    font-weight:600;
    margin-bottom:8px;
}

.form-group input,
.form-group select,
.form-group textarea{
    width:100%;
    background:#2a2a2a;
    border:1px solid #333;
    color:#fff;
    padding:12px 16px;
    border-radius:10px;
    font-size:14px;
    font-family:'Poppins',sans-serif;
    transition:.2s;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus{
    outline:none;
    border-color:#f5a623;
}

.form-group textarea{
    resize:vertical;
    min-height:120px;
}

.form-group .hint{
    color:#666;
    font-size:12px;
    margin-top:6px;
}

.form-actions{
    display:flex;
    gap:12px;
    margin-top:30px;
}

.btn{
    padding:12px 28px;
    border-radius:10px;
    font-size:14px;
    font-weight:600;
    text-decoration:none;
    transition:.2s;
    border:none;
    cursor:pointer;
    font-family:'Poppins',sans-serif;
    display:inline-flex;
    align-items:center;
    gap:8px;
}

.btn-submit{
    background:#f5a623;
    color:#111;
}

.btn-submit:hover{
    background:#e6991a;
}

.btn-cancel{
    background:#2a2a2a;
    color:#ccc;
}

.btn-cancel:hover{
    background:#333;
}

/* ================= SHOW ================= */

.show-card{
    background:#1c1c1c;
    border-radius:15px;
    padding:35px;
    box-shadow:0 4px 20px rgba(0,0,0,.3);
    max-width:700px;
}

.show-card .detail-img{
    width:100%;
    max-height:350px;
    object-fit:cover;
    border-radius:12px;
    margin-bottom:25px;
}

.show-card .detail-row{
    display:flex;
    padding:14px 0;
    border-bottom:1px solid #2a2a2a;
}

.show-card .detail-label{
    width:140px;
    color:#888;
    font-size:13px;
    font-weight:600;
}

.show-card .detail-value{
    flex:1;
    font-size:14px;
}

.show-card .detail-price{
    color:#f5a623;
    font-size:24px;
    font-weight:700;
}

/* ================= PAGINATION ================= */

.pagination{
    padding:20px 25px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    border-top:1px solid #2a2a2a;
}

.pagination .info{
    color:#666;
    font-size:13px;
}

.pagination .links{
    display:flex;
    gap:5px;
}

.pagination .links a,
.pagination .links span{
    padding:8px 14px;
    border-radius:6px;
    font-size:13px;
    text-decoration:none;
    transition:.2s;
}

.pagination .links a{
    background:#2a2a2a;
    color:#ccc;
}

.pagination .links a:hover{
    background:#333;
}

.pagination .links span.active{
    background:#f5a623;
    color:#111;
    font-weight:600;
}

/* ================= EMPTY ================= */

.empty{
    text-align:center;
    padding:60px 20px;
    color:#666;
}

.empty .icon{
    font-size:48px;
    margin-bottom:15px;
}

.empty p{
    margin-bottom:20px;
}

/* ================= RESPONSIVE ================= */

@media(max-width:768px){

.sidebar{
    display:none;
}

.main{
    margin-left:0;
}

.content{
    padding:20px 15px;
}

.topbar{
    padding:15px;
}

.table-wrapper{
    overflow-x:auto;
}

table{
    min-width:600px;
}

.form-card{
    padding:25px;
}

}

</style>

</head>
<body>

<!-- Sidebar -->
<div class="sidebar">

<div class="sidebar-logo">
    <a href="{{ route('home') }}">BASABASI</a>
    <small>ADMIN PANEL</small>
</div>

<div class="sidebar-nav">
    <a href="{{ route('admin.menu.index') }}" class="{{ request()->routeIs('admin.menu.*') ? 'active' : '' }}">
        <span class="icon">🍽️</span> Menu
    </a>
    <a href="{{ route('home') }}">
        <span class="icon">🌐</span> Lihat Website
    </a>
</div>

</div>

<!-- Main Content -->
<div class="main">

<div class="topbar">
    <h1>@yield('title', 'Dashboard')</h1>
    <div class="topbar-right">
        @yield('topbar-actions')
    </div>
</div>

<div class="content">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-error">{{ session('error') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-error">
            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    @yield('content')
</div>

</div>

</body>
</html>
