<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('menu');
    }

    // Halaman Reservasi
    public function reservasi()
    {
        return view('reservasi');
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