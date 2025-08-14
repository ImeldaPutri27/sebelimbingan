@extends('layouts.frontend.app')

@section('content')
<div class="container mt-5 mb-5">
    <h2 class="mb-4 text-primary">List Agenda Desa</h2>
    @forelse($agenda as $agd)
        <div class="card mb-3">
            <div class="card-body">
                <h5><a href="{{ route('agenda.show', $agd->slug) }}">{{ $agd->judul }}</a></h5>
                <small class="text-muted">Tanggal: {{ \Carbon\Carbon::parse($agd->tgl)->format('d M Y') }}</small>
                <p class="mt-2">{{ \Illuminate\Support\Str::limit(strip_tags($agd->deskripsi), 100) }}</p>
                <a href="{{ route('agenda.show', $agd->slug) }}" class="btn btn-sm btn-primary">Lihat Detail</a>
            </div>
        </div>
    @empty
        <p>Tidak ada agenda.</p>
    @endforelse
</div>
@endsection
