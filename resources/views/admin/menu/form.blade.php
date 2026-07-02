@extends('layouts.admin')

@section('title', isset($menu) ? 'Edit Menu' : 'Tambah Menu')

@section('topbar-actions')
<a href="{{ route('admin.menu.index') }}" class="btn-topbar" style="background:#2a2a2a;color:#ccc;">← Kembali</a>
@endsection

@section('content')

<div class="form-card">

<form action="{{ isset($menu) ? route('admin.menu.update', $menu->id) : route('admin.menu.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($menu))
        @method('PUT')
    @endif

    <div class="form-group">
        <label for="nama_menu">Nama Menu</label>
        <input type="text" id="nama_menu" name="nama_menu" value="{{ old('nama_menu', $menu->nama_menu ?? '') }}" placeholder="Contoh: Cafe Latte" required>
    </div>

    <div class="form-group">
        <label for="kategori">Kategori</label>
        <select id="kategori" name="kategori" required>
            <option value="">Pilih kategori</option>
            <option value="Coffee" {{ old('kategori', $menu->kategori ?? '') == 'Coffee' ? 'selected' : '' }}>Coffee</option>
            <option value="Non Coffee" {{ old('kategori', $menu->kategori ?? '') == 'Non Coffee' ? 'selected' : '' }}>Non Coffee</option>
            <option value="Food" {{ old('kategori', $menu->kategori ?? '') == 'Food' ? 'selected' : '' }}>Food</option>
            <option value="Dessert" {{ old('kategori', $menu->kategori ?? '') == 'Dessert' ? 'selected' : '' }}>Dessert</option>
        </select>
    </div>

    <div class="form-group">
        <label for="harga">Harga (Rp)</label>
        <input type="number" id="harga" name="harga" value="{{ old('harga', $menu->harga ?? '') }}" placeholder="Contoh: 25000" min="0" required>
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea id="deskripsi" name="deskripsi" placeholder="Deskripsi singkat tentang menu ini..." required>{{ old('deskripsi', $menu->deskripsi ?? '') }}</textarea>
    </div>

    <div class="form-group">
        <label for="gambar">Gambar</label>
        <input type="file" id="gambar" name="gambar" accept="jpg,jpeg,png,webp">
        <div class="hint">Format: JPG, JPEG, PNG, WEBP. Maks 2MB.</div>
        @if(isset($menu) && $menu->gambar)
            <div style="margin-top:10px;">
                <img src="{{ asset('storage/' . $menu->gambar) }}" style="width:100px;height:100px;object-fit:cover;border-radius:10px;" alt="Gambar saat ini">
                <div class="hint">Gambar saat ini. Upload baru untuk mengganti.</div>
            </div>
        @endif
    </div>

    <div class="form-actions">
        <button type="submit" class="btn btn-submit">
            {{ isset($menu) ? '💾 Simpan Perubahan' : '➕ Tambah Menu' }}
        </button>
        <a href="{{ route('admin.menu.index') }}" class="btn btn-cancel">Batal</a>
    </div>

</form>

</div>

@endsection
