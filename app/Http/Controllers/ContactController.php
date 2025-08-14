<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Menampilkan halaman kontak
    public function index()
    {
        return view('home.potensi', [
            'title' => 'Kontak Kami'
        ]);
    }

    // Menangani pengiriman form kontak
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        // Simpan ke database atau kirim email di sini

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
