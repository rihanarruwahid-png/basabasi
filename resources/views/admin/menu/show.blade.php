@extends('layouts.admin')

@section('title', 'Detail Menu')

@section('topbar-actions')
<a href="{{ route('admin.menu.edit', $menu->id) }}" class="btn-topbar btn-primary">✏️ Edit</a>
<a href="{{ route('admin.menu.index') }}" class="btn-topbar" style="background:#2a2a2a;color:#ccc;">← Kembali</a>
@endsection

@section('content')

<div class="show-card">

@if($menu->gambar)
    <img src="{{ asset('storage/' . $menu->gambar) }}" class="detail-img" alt="{{ $menu->nama_menu }}">
@endif

<div class="detail-row">
    <span class="detail-label">Nama Menu</span>
    <span class="detail-value">{{ $menu->nama_menu }}</span>
</div>

<div class="detail-row">
    <span class="detail-label">Kategori</span>
    <span class="detail-value"><span class="badge">{{ $menu->kategori }}</span></span>
</div>

<div class="detail-row">
    <span class="detail-label">Harga</span>
    <span class="detail-value detail-price">Rp {{ number_format($menu->harga, 0, ',', '.') }}</span>
</div>

<div class="detail-row">
    <span class="detail-label">Deskripsi</span>
    <span class="detail-value">{{ $menu->deskripsi }}</span>
</div>

<div class="detail-row">
    <span class="detail-label">Dibuat</span>
    <span class="detail-value">{{ $menu->created_at->format('d M Y H:i') }}</span>
</div>

<div class="detail-row">
    <span class="detail-label">Diperbarui</span>
    <span class="detail-value">{{ $menu->updated_at->format('d M Y H:i') }}</span>
</div>

<div class="form-actions" style="margin-top:30px;">
    <a href="{{ route('admin.menu.edit', $menu->id) }}" class="btn btn-submit">✏️ Edit</a>
    <form action="{{ route('admin.menu.destroy', $menu->id) }}" method="POST" onsubmit="return confirm('Yakin hapus menu ini?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn" style="background:#ef4444;color:#fff;">🗑️ Hapus</button>
    </form>
    <a href="{{ route('admin.menu.index') }}" class="btn btn-cancel">Kembali</a>
</div>

</div>

@endsection
