<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class FrontController extends Controller
{
    // Halaman Home
    public function index()
    {
        return view('home');
    }

    // Halaman Page
    public function page()
    {
        return view('page');
    }

    // Halaman Menu
    public function menu()
    {
        $menus = Menu::orderBy('kategori')->orderBy('nama_menu')->get();
        return view('menu', compact('menus'));
    }

    // Halaman Reservasi
    public function reservasi()
    {
        $menus = Menu::orderBy('kategori')->orderBy('nama_menu')->get();
        return view('reservasi', compact('menus'));
    }

    // Halaman Gallery
    public function gallery()
    {
        return view('gallery');
    }

    // Halaman Kontak
    public function kontak()
    {
        return view('kontak');
    }

    // Halaman Test (opsional)
    public function test()
    {
        return view('test');
    }
}