<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $query = Menu::query();

        if ($request->filled('search')) {
            $query->where('nama_menu', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        $menus = $query->orderBy('created_at', 'desc')->paginate(10)->withQueryString();

        return view('admin.menu.index', compact('menus'));
    }

    public function create()
    {
        return view('admin.menu.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_menu' => 'required|string|max:255',
            'kategori'  => 'required|string|max:100',
            'harga'     => 'required|integer|min:0',
            'deskripsi' => 'required|string',
            'gambar'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('menu', 'public');
        }

        Menu::create($validated);

        return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $menu = Menu::findOrFail($id);
        return view('admin.menu.show', compact('menu'));
    }

    public function edit(string $id)
    {
        $menu = Menu::findOrFail($id);
        return view('admin.menu.form', compact('menu'));
    }

    public function update(Request $request, string $id)
    {
        $menu = Menu::findOrFail($id);

        $validated = $request->validate([
            'nama_menu' => 'required|string|max:255',
            'kategori'  => 'required|string|max:100',
            'harga'     => 'required|integer|min:0',
            'deskripsi' => 'required|string',
            'gambar'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($menu->gambar) {
                Storage::disk('public')->delete($menu->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('menu', 'public');
        }

        $menu->update($validated);

        return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $menu = Menu::findOrFail($id);

        if ($menu->gambar) {
            Storage::disk('public')->delete($menu->gambar);
        }

        $menu->delete();

        return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil dihapus.');
    }
}
