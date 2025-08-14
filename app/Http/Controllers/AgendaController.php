<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda; // ✅ Tambahkan ini

class AgendaController extends Controller
{
    public function index()
    {
        // Ambil semua data agenda, bisa diurutkan dari terbaru
        $agenda = Agenda::orderBy('tgl', 'desc')->get();
        return view('agenda.index', compact('agenda'));
    }

    public function show(Agenda $agenda)
    {
        return view('agenda.show', compact('agenda'));
    }

    public function search(Request $request)
    {	
        $artikel = Agenda::where('judul','like','%'.$request->keyword.'%')
                         ->orWhere('deskripsi','like','%'.$request->keyword.'%')
                         ->paginate(4);

        return view('agenda.index', compact('agenda'));
    }
}
