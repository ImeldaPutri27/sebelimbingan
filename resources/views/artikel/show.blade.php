@extends('layouts.frontend.app', [
    'title' => 'Baca Artikel',
])

@section('content')
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url({{ asset($artikel->getThumbnail()) }});">
    <div class="blog-details-headline">
        <h3>{{ $artikel->judul }}</h3>
        <div class="meta d-flex align-items-center justify-content-center">
            <a href="#">{{ $artikel->user->author }}</a>
            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
            {{-- Hapus akses langsung ke kategori yang bisa null --}}
            {{-- <a href="#">{{ $artikel->kategoriArtikel->nama_kategori }}</a> --}}
            <a href="#">{{ optional($artikel->kategoriArtikel)->nama_kategori ?? 'Tanpa Kategori' }}</a>
        </div>
    </div>
</div>

<!-- ##### Catagory Area End ##### -->

<!-- ##### Blog Details Content ##### -->
<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <!-- Blog Details Text -->
                <div class="blog-details-text">
                    {!! $artikel->deskripsi !!}
                    <!-- Tags -->
                    {{-- 
                    <div class="post-tags">
                        <ul>
                            <li><a href="#">Manual</a></li>
                            <li><a href="#">Liberty</a></li>
                            <li><a href="#">Interpritation</a></li>
                        </ul>
                    </div>
                    --}}
                </div>
            </div>
        </div>
    </div>

    {{-- Bagian komentar dan related posts dikomentari total karena masih dummy --}}
    {{--
    <div class="related-posts section-padding-100-0">
        ...
    </div>
    --}}
</div>
@stop
