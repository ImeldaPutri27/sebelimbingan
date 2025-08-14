@extends('layouts.frontend.app',[
    'title' => 'Home',
])
@section('content')

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+0io+n1Dug4J9SIjoGEylNuN0E65E" crossorigin="anonymous"></script>

<!-- ##### Hero Area Start ##### -->
<section class="hero-area bg-img bg-overlay-2by5" style="background-image: url({{ asset('img/bg') }}/stafffff.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <!-- Hero Content -->
                <div class="hero-content text-center text-white">
                    <h1 class="mb-3 text-white">Selamat Datang di Website Resmi</h1>
                    <h2 class="mb-4 font-weight-bold">Pemerintah Desa Sebelimbingan</h2>
                    <p class="lead mb-4 text-white">Kami hadir untuk melayani, menginformasikan, dan membangun desa bersama masyarakat.</p>
                    <!-- <a href="#" class="btn btn-success btn-lg px-4">Jelajahi Informasi Desa</a> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ##### Hero Area End ##### -->

<div class="regular-page-area section-padding-100 mt-5 mb-4">
    <div class="col-lg-9 mx-auto">
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-header bg-primary text-white py-3 rounded-top-4">
                <h4 class="mb-0 fw-semibold text-white"><i class="bi bi-geo-alt-fill me-2"></i>Jelajahi Desa Sebelimbingan</h4>
            </div>
            <div class="card-body p-4 bg-light">
                <p class="lead mb-4" style="text-align: justify;">
                    <strong>Desa Sebelimbingan</strong> merupakan salah satu desa yang terletak di <span class="text-primary fw-semibold">Kecamatan Kota Bangun</span>, <span class="text-primary fw-semibold">Kabupaten Kutai Kartanegara</span>, <span class="text-primary fw-semibold">Provinsi Kalimantan Timur</span>. Desa ini dikenal dengan <em>suasana alamnya yang asri</em> dan kehidupan masyarakat yang menjunjung tinggi <strong>nilai gotong royong</strong> serta <strong>kearifan lokal</strong>.
                </p>
                <p style="text-align: justify;">
                    Mayoritas penduduk bermata pencaharian di sektor <span class="fw-semibold">pertanian</span>, <span class="fw-semibold">perikanan</span>, dan <span class="fw-semibold">perkebunan</span>. Selain itu, masyarakat juga aktif dalam <span class="text-primary">kegiatan sosial dan keagamaan</span> yang memperkuat solidaritas antarwarga.
                </p>
                <p style="text-align: justify;">
                    Dengan potensi alam dan sumber daya manusia yang dimiliki, desa ini terus berkembang menjadi <strong class="text-success">desa mandiri, produktif, dan ramah lingkungan</strong>. Upaya digitalisasi melalui website ini mencerminkan <em>komitmen untuk meningkatkan transparansi, pelayanan publik, dan promosi potensi desa</em> kepada masyarakat luas.
                </p>
            </div>
        </div>
    </div>
</div>


<section class="section-padding-100-50 mb-5">
    <div class="container">
        <div class="row align-items-start">
            <!-- Foto Kepala Desa -->
            <div class="col-lg-4 text-center mb-4 mb-lg-0">
                <div class="rounded-circle shadow"
                        style="width: 300px; height: 300px; object-fit: cover; background-image: url('{{ asset('img/bg/kadess.jpg') }}'); background-size: cover; background-position: center;">
                </div>
            </div>


            <!-- Konten Sambutan -->
            <div class="col-lg-8">
                <!-- Judul -->
                <h3 class="text-primary fw-bold">Sambutan Kepala Desa Sebelimbingan</h3>
                <h5 class="fw-semibold mb-0">SAUQANI</h5>
                <small class="d-block mb-3"><strong>KEPALA DESA SEBELIMBINGAN</strong></small>

                <!-- Konten Scrollable -->
                <div class="scrollable-sambutan p-3">
                    <p>
                        Assalamu'alaikum warahmatullahi wabarakatuh. Selamat Datang di Website Desa Sebelimbingan.
                        Melalui website ini, kami berupaya menghadirkan informasi secara aktual dan efektif terkait
                        program dan kegiatan pembangunan Pemerintah Desa Sebelimbingan, Kecamatan Kota Bangun, Kabupaten
                        Kutai Kartanegara, Provinsi Kalimantan Timur.
                    </p>
                    <p>
                        Website ini kami hadirkan untuk pemanfaatan teknologi informasi yang kian pesat. Website ini
                        hadir dari ide kreatif dan inovatif, serta merupakan wujud terobosan transformasi kinerja untuk
                        lebih baik.
                    </p>
                    <p>
                        Website ini kami hadirkan untuk pemanfaatan teknologi informasi yang kian pesat. Website ini
                        hadir dari ide kreatif dan inovatif, serta merupakan wujud terobosan transformasi kinerja untuk
                        lebih baik.
                    </p>
                    <p>
                        Website ini kami hadirkan untuk pemanfaatan teknologi informasi yang kian pesat. Website ini
                        hadir dari ide kreatif dan inovatif, serta merupakan wujud terobosan transformasi kinerja untuk
                        lebih baik.
                    </p>
                    <p>
                        Website ini kami hadirkan untuk pemanfaatan teknologi informasi yang kian pesat. Website ini
                        hadir dari ide kreatif dan inovatif, serta merupakan wujud terobosan transformasi kinerja untuk
                        lebih baik.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding-100-50">
    <div class="container">
        <!-- <h3 class="text-primary fw-bold mb-5 text-center">Galeri Kegiatan Desa</h3> -->
        <div id="galeriCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3500">
            
            <!-- Titik-titik navigasi -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#galeriCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#galeriCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#galeriCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/bg/rt.jpg') }}" class="d-block w-100 gallery-image" alt="Kegiatan 1">
                    <div class="carousel-caption d-none d-md-block custom-caption-blur">
                        <h5>RT Desa Sebelimbingan </h5>
                        <p>Rt.01 Rt.02 Rt.03 Rt.04 Rt.05</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('img/bg/lembaga.jpg') }}" class="d-block w-100 gallery-image" alt="Kegiatan 2">
                    <div class="carousel-caption d-none d-md-block custom-caption-blur">
                        <h5>Lembaga - Lembaga Desa Sebelimbingan</h5>
                        <p>BPD, LPM, Adat, Limas</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('img/bg/posyandu.jpg') }}" class="d-block w-100 gallery-image" alt="Kegiatan 3">
                    <div class="carousel-caption d-none d-md-block custom-caption-blur">
                        <h5>Posyandu Desa Sebelimbingan</h5>
                        <p>Posyandu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@if($pengumuman->count() > 0)
<section class="upcoming-events section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3 class="text-primary">Pengumuman Terbaru</h3>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($pengumuman as $pn)
            <div class="col-12 col-md-6 col-lg-6">
                <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                    <!-- Events Thumb -->
                    <div class="events-thumb">
                        <img src="{{ asset('img/bg') }}/pengumuman.png" alt="">
                        <h6 class="event-date">{{ $pn->tgl }} | BY : {{ $pn->user->name }}</h6>
                        <h4 class="event-title">{{ $pn->judul }}</h4>
                    </div>
                    <div>
                        <a href="{{ route('pengumuman.show',$pn->slug) }}" class="btn btn-primary col-lg">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <a href="{{ route('pengumuman') }}" class="alert alert-success alert-link mx-auto">Lihat Semua Pengumuman</a>
        </div>
    </div>
</section>
@endif

@if($agenda->count() > 0)
<!-- ##### Agenda ##### -->
<section class="section-padding-100-0 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3 class="text-primary">Agenda Terbaru</h3>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($agenda as $agd)
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="mb-0">
                                <a href="{{ route('agenda.show', $agd->slug) }}" class="text-decoration-none text-dark">
                                    {{ $agd->judul }}
                                </a>
                            </h5>
                            <small class="text-muted float-right">📅 {{ \Carbon\Carbon::parse($agd->tgl)->translatedFormat('d F Y') }}</small>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                {{ \Illuminate\Support\Str::limit(strip_tags($agd->deskripsi), 100) }}
                            </p>
                            <a href="{{ route('agenda.show', $agd->slug) }}" class="btn btn-primary btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row mt-3">
            <a href="{{ route('agenda') }}" class="alert alert-success alert-link mx-auto mt-3">Lihat Semua Agenda</a>
        </div>
    </div>
</section>
@endif


@if($artikel->count() > 0)
<!-- ##### Artikel ##### -->
<section class="blog-area section-padding-100-0 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3 class="text-primary">Artikel Terbaru</h3>
                </div>
            </div>
        </div>

        <div class="row">
            
            @foreach($artikel as $art)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            {{ $art->judul }}

                            <span class="badge badge-danger float-right">Author : {{ $art->user->name }}</span>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset($art->getThumbnail()) }}" width="100%" style="height: 300px; object-fit: cover; object-position: center;">

                            <div class="card-text mt-3">
                                {!! Str::limit($art->deskripsi) !!}
                            </div>

                            <a href="{{ route('artikel.show',$art->slug) }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                        </div>
                        <div class="card-footer">
                                <span class="badge badge-primary float-right">kategori : {{ $art->kategoriArtikel->nama_kategori ?? '-'}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-3">
            <a href="{{ route('artikel') }}" class="alert alert-success alert-link mx-auto mt-3">Lihat Semua Artikel</a>
        </div>
    </div>
</section>
@endif
@stop

<!-- Style Scrollbar Modern -->
<style>
    :root {
        --primary: rgba(137, 194, 244, 0.96);
        --primary-dark: #0d6efd;
    }

    .bg-gradient-primary {
        background: linear-gradient(135deg, #00bfff, #1e90ff);
    }

    .scrollable-sambutan {
        max-height: 300px;
        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: #999 transparent;
        border-left: 4px solid var(--primary-dark);
        border-radius: 5px;
        background-color: #f9f9f9;
        padding: 10px;
    }

    .scrollable-sambutan::-webkit-scrollbar {
        width: 6px;
    }

    .scrollable-sambutan::-webkit-scrollbar-thumb {
        background-color: #999;
        border-radius: 20px;
    }

    .scrollable-sambutan::-webkit-scrollbar-track {
        background: transparent;
    }

    .gallery-image {
        height: 500px;
        object-fit: cover;
        transition: filter 0.3s ease;
        filter: brightness(85%);
        border-radius: 1rem;
    }

    .gallery-image:hover {
        filter: brightness(100%);
    }

    .custom-caption-blur {
        background-color: rgba(137, 194, 244, 0.6);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        padding: 12px 20px;
        border-radius: 12px;
        color: white;
    }

    .custom-caption-blur h5,
    .custom-caption-blur p {
        color: white !important;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
    }

    .carousel-indicators button {
        width: 10px;
        height: 10px;
        margin: 0 6px;
        border-radius: 50%;
        background-color: var(--primary-dark);
        opacity: 0.4;
        transition: all 0.3s ease;
        border: none;
    }

    .carousel-indicators .active {
        opacity: 1;
        background-color: #000;
    }

    .card {
        border-radius: 1.25rem;
        border: none;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
    }

    .card-header {
        background-color: var(--primary-dark);
        color: white;
        font-weight: bold;
        border-top-left-radius: 1.25rem;
        border-top-right-radius: 1.25rem;
    }

    .card-body p span {
        font-weight: 500;
    }

    .section-heading h3 {
        border-left: 4px solid var(--primary-dark);
        padding-left: 10px;
    }

    .rounded-circle.shadow {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .alert-link {
        font-weight: 600;
        font-size: 1rem;
        padding: 10px 20px;
        border-radius: 0.75rem;
        display: inline-block;
        text-align: center;
    }

</style>

</style>
<script>
    const myCarousel = new bootstrap.Carousel('#galeriCarousel', {
        interval: 3000,
        ride: 'carousel'
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

