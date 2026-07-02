@extends('layouts.admin')

@section('title', 'Kelola Menu')

@section('topbar-actions')
<a href="{{ route('admin.menu.create') }}" class="btn-topbar btn-primary">+ Tambah Menu</a>
@endsection

@section('content')

<div class="table-wrapper">

<div class="table-top">
    <form action="{{ route('admin.menu.index') }}" method="GET" class="search-box">
        <input type="text" name="search" placeholder="Cari menu..." value="{{ request('search') }}">
        <select name="kategori">
            <option value="">Semua Kategori</option>
            <option value="Coffee" {{ request('kategori') == 'Coffee' ? 'selected' : '' }}>Coffee</option>
            <option value="Non Coffee" {{ request('kategori') == 'Non Coffee' ? 'selected' : '' }}>Non Coffee</option>
            <option value="Food" {{ request('kategori') == 'Food' ? 'selected' : '' }}>Food</option>
            <option value="Dessert" {{ request('kategori') == 'Dessert' ? 'selected' : '' }}>Dessert</option>
        </select>
        <button type="submit">Filter</button>
    </form>
</div>

@if($menus->count() > 0)
<table>
    <thead>
        <tr>
            <th>Gambar</th>
            <th>Nama Menu</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($menus as $menu)
        <tr>
            <td>
                @if($menu->gambar)
                    <img src="{{ asset('storage/' . $menu->gambar) }}" class="menu-img" alt="{{ $menu->nama_menu }}">
                @else
                    <div class="menu-img" style="display:flex;align-items:center;justify-content:center;color:#555;font-size:20px;">📷</div>
                @endif
            </td>
            <td><strong>{{ $menu->nama_menu }}</strong></td>
            <td><span class="badge">{{ $menu->kategori }}</span></td>
            <td>Rp {{ number_format($menu->harga, 0, ',', '.') }}</td>
            <td>
                <div class="actions">
                    <a href="{{ route('admin.menu.show', $menu->id) }}" class="btn-sm btn-view">Detail</a>
                    <a href="{{ route('admin.menu.edit', $menu->id) }}" class="btn-sm btn-edit">Edit</a>
                    <form action="{{ route('admin.menu.destroy', $menu->id) }}" method="POST" onsubmit="return confirm('Yakin hapus menu ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-sm btn-delete">Hapus</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="pagination">
    <span class="info">Menampilkan {{ $menus->firstItem() }}-{{ $menus->lastItem() }} dari {{ $menus->total() }} menu</span>
    <div class="links">
        {{ $menus->links() }}
    </div>
</div>

@else
<div class="empty">
    <div class="icon">🍽️</div>
    <p>Belum ada menu yang tersedia.</p>
    <a href="{{ route('admin.menu.create') }}" class="btn btn-submit">+ Tambah Menu Pertama</a>
</div>
@endif

</div>

@endsection
